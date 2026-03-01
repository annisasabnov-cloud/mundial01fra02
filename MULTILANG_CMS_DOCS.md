# Filament Multi-Language CMS - Struktur Database Baru

## 📋 Overview

Struktur database yang telah diupdate menggunakan 2 tabel utama:

1. **section_contents** - Untuk menyimpan konten per section dengan translasi JSON
2. **translations** - Untuk menyimpan translasi global/reusable

---

## 📊 Tabel: section_contents

Menyimpan konten spesifik per halaman/section dengan field translatable (JSON).

### Schema
```sql
- id (integer, primary)
- section_key (string) - Identifier unik: 'hero_home', 'features_home', etc
- content_type (string) - 'text', 'image', 'mixed'
- title (json) - {"en": "...", "de": "...", "fr": "..."}
- subtitle (json) - {"en": "...", "de": "...", "fr": "..."}
- description (json) - {"en": "...", "de": "...", "fr": "..."}
- button_text (json) - {"en": "...", "de": "...", "fr": "..."}
- button_link (json) - {"en": "...", "de": "...", "fr": "..."}
- image (string, nullable) - Path ke gambar
- icon (string, nullable) - Icon class (heroicon, dst)
- css_class (string, nullable) - Custom CSS classes untuk styling
- is_visible (boolean) - Tampil/sembunyikan section
- sort_order (integer) - Urutan display (lower = higher priority)
- created_at, updated_at
```

### Contoh Data
```json
{
  "id": 1,
  "section_key": "hero_home",
  "content_type": "mixed",
  "title": {
    "en": "Welcome to Mundial",
    "de": "Willkommen bei Mundial",
    "fr": "Bienvenue chez Mundial"
  },
  "description": {
    "en": "We provide comprehensive solutions...",
    "de": "Wir bieten umfassende Lösungen...",
    "fr": "Nous fournissons des solutions..."
  },
  "button_text": {
    "en": "Get Started",
    "de": "Loslegen",
    "fr": "Commencer"
  },
  "button_link": {
    "en": "/start",
    "de": "/start",
    "fr": "/start"
  },
  "is_visible": true,
  "sort_order": 1,
  "css_class": "hero-banner"
}
```

---

## 📊 Tabel: translations

Menyimpan translasi global yang dapat di-reuse di berbagai tempat.

### Schema
```sql
- id (integer, primary)
- key (string) - Unique identifier: 'site.title', 'footer.copyright', etc
- language (string) - 'en', 'de', 'fr'
- section (string, nullable) - Grouping: 'footer', 'header', etc
- value (longText) - Translation value
- type (string) - 'text', 'html', 'json'
- created_at, updated_at

unique: ['key', 'language']
```

### Contoh Data
```sql
key: 'site.title', language: 'en', value: 'Mundial - Global Solutions'
key: 'site.title', language: 'de', value: 'Mundial - Globale Lösungen'
key: 'site.title', language: 'fr', value: 'Mundial - Solutions Mondiales'
key: 'footer.copyright', language: 'en', value: '© 2026 Mundial. All rights reserved.'
```

---

## 🔧 Models & Usage

### Model: SectionContent

```php
use App\Models\SectionContent;

// Get konten untuk hero section
$hero = SectionContent::bySection('hero_home')->visible()->first();

// Get judul dalam bahasa tertentu
$enTitle = $hero->getTranslation('title', 'en');
$deTitle = $hero->getTranslation('title', 'de');

// Get semua translasi untuk field
$allTitles = $hero->getTranslations('title');
// Result: ['en' => 'Welcome...', 'de' => 'Willkommen...', 'fr' => 'Bienvenue...']

// Get semua sections yang visible, ordered
$sections = SectionContent::visible()->ordered()->get();

// Filter by section key
$homeContent = SectionContent::where('section_key', 'hero_home')->first();

// Set translasi baru
$hero->setTranslation('title', 'en', 'New Title');
$hero->save();
```

### Model: Translation

```php
use App\Models\Translation;

// Get global translation
$siteTitle = Translation::byKey('site.title')
                        ->byLanguage('en')
                        ->first();

// Get all translations for a key
$siteTitle = Translation::byKey('site.title')->get();
// Result: 3 records (en, de, fr)

// Get translations by section
$footerTrans = Translation::bySection('footer')->byLanguage('en')->get();

// Create new translation
Translation::create([
    'key' => 'nav.menu_home',
    'language' => 'en',
    'section' => 'header',
    'value' => 'Home',
    'type' => 'text',
]);
```

---

## 📱 Blade Template Examples

### Tampilkan Section Content

```blade
@php
    $sectionContent = \App\Models\SectionContent::bySection('hero_home')->visible()->first();
    $locale = app()->getLocale(); // 'en', 'de', 'fr'
@endphp

<section class="{{ $sectionContent->css_class }}">
    <h1>{{ $sectionContent->getTranslation('title', $locale) }}</h1>
    <h2>{{ $sectionContent->getTranslation('subtitle', $locale) }}</h2>
    <p>{{ $sectionContent->getTranslation('description', $locale) }}</p>
    
    @if($sectionContent->button_text)
        <a href="{{ $sectionContent->getTranslation('button_link', $locale) }}" class="btn">
            {{ $sectionContent->getTranslation('button_text', $locale) }}
        </a>
    @endif
    
    @if($sectionContent->image)
        <img src="{{ asset('storage/' . $sectionContent->image) }}" alt="">
    @endif
</section>
```

### Loop Multiple Sections

```blade
@php
    $sections = \App\Models\SectionContent::visible()->ordered()->get();
    $locale = app()->getLocale();
@endphp

@foreach($sections as $section)
    <section id="{{ $section->section_key }}" class="{{ $section->css_class }}">
        <div class="container">
            <h2>{{ $section->getTranslation('title', $locale) }}</h2>
            <p>{{ $section->getTranslation('description', $locale) }}</p>
        </div>
    </section>
@endforeach
```

### Gunakan Global Translations

```blade
@php
    $siteTitle = \App\Models\Translation::byKey('site.title')
        ->byLanguage(app()->getLocale())
        ->first();
    $copyright = \App\Models\Translation::byKey('footer.copyright')
        ->byLanguage(app()->getLocale())
        ->first();
@endphp

<html>
<head>
    <title>{{ $siteTitle->value }}</title>
</head>
<body>
    ...
    <footer>
        <p>{{ $copyright->value }}</p>
    </footer>
</body>
</html>
```

---

## 🎯 Filament Admin Panel

### Akses ke Resources

1. **Section Contents** - Manage konten per section
   - URL: http://localhost:8000/admin/section-contents
   - Create, Edit, Delete section dengan translasi

2. **Translations** - Manage global translations
   - URL: http://localhost:8000/admin/translations
   - Manage translasi yang bisa di-reuse

### Features

- ✅ Tabbed interface untuk EN, DE, FR
- ✅ Image upload
- ✅ CSS class customization
- ✅ Visibility toggle
- ✅ Sort/Order management
- ✅ Search & Filter

---

## 🚀 Query Examples

### Get Semua Sections untuk Home Page

```php
$sections = SectionContent::where('section_key', 'LIKE', '%_home')
                          ->visible()
                          ->ordered()
                          ->get();
```

### Get Content dengan Image

```php
$sections = SectionContent::whereNotNull('image')
                          ->visible()
                          ->get();
```

### Get Sections by Content Type

```php
$mixedContent = SectionContent::where('content_type', 'mixed')
                               ->visible()
                               ->get();
```

### Search dalam Translasi

```php
$results = SectionContent::visible()
                         ->where('title->en', 'LIKE', '%welcome%')
                         ->get();
// MySQL JSON search
```

---

## 💡 Keuntungan Struktur Baru

1. **Flexible** - Section dan global translations terpisah
2. **Scalable** - Mudah menambah section atau translasi baru
3. **Reusable** - Translations table bisa di-share across sections
4. **Type Support** - Support untuk text, html, json content
5. **CSS Customization** - Per-section styling
6. **Better Performance** - Indexed fields untuk query cepat
7. **Easy Management** - Filament UI yang user-friendly

---

## 📌 Admin Credentials

```
Email:    admin@mundial.test
Password: password123
URL:      http://localhost:8000/admin
```

---

## 🎯 Next Steps

1. Start dev server: `php artisan serve`
2. Access Filament: http://localhost:8000/admin
3. Create sections di "Section Contents"
4. Add global translations di "Translations"
5. Display di Blade templates menggunakan contoh di atas

Happy coding! 🚀
