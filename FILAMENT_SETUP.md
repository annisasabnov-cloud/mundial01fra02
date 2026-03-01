# Filament Multi-Language CMS Setup - Dokumentasi

## ✅ Setup Selesai

### 1. **Database & Model**
- ✅ Migration untuk `sections` table dengan JSON columns (title, description, content)
- ✅ Model `Section` dengan Spatie `HasTranslations` trait
- ✅ Support untuk 3 bahasa: English (en), German (de), French (fr)

### 2. **Seeder Data**
- ✅ 6 sections dengan translasi penuh untuk semua 3 bahasa:
  - Home
  - Start
  - Kontakt
  - Preise
  - Angebote
  - Aufgabe

### 3. **Filament Admin Panel**
- ✅ Filament 3.3.49+ installed
- ✅ Admin panel at `/admin`
- ✅ SectionResource dengan:
  - Tabs untuk setiap bahasa (EN, DE, FR)
  - Form fields untuk title, description, content
  - Image upload
  - Toggle active/inactive
  - Order/sorting

### 4. **Pages CRUD**
- ✅ ListSections - view semua sections
- ✅ CreateSection - create section baru dengan 3 bahasa
- ✅ EditSection - edit section dengan translasi

### 5. **Authentication**
- ✅ Admin user sudah dibuat:
  - Email: `admin@mundial.test`
  - Password: `password123`

---

## 🚀 Cara Menggunakan

### 1. **Mulai Development Server**
```bash
cd /home/cerita_oca/Documents/iza/mundial_project2/mundial1fra2
php artisan serve
```

### 2. **Akses Filament Admin Panel**
- URL: `http://localhost:8000/admin`
- Email: `admin@mundial.test`
- Password: `password123`

### 3. **Manage Sections**
- Klik "Sections" di sidebar navigasi
- Create, Read, Update, Delete sections
- Switch antar tabs untuk edit setiap bahasa

---

## 📝 Struktur Data

### Sections Table
```sql
- id (integer, primary)
- key (string, unique) - identifier unik
- title (json) - {"en": "...", "de": "...", "fr": "..."}
- description (json) - sama seperti title
- content (json) - sama seperti title  
- image (string, nullable) - path to image
- is_active (boolean)
- order (integer) - untuk urutan display
- created_at, updated_at
```

---

## 💻 Mengakses Data dari Code

### Get Translasi Spesifik
```php
$section = Section::find(1);

// Get judul dalam bahasa spesifik
$title_en = $section->getTranslation('title', 'en');
$title_de = $section->getTranslation('title', 'de');
$title_fr = $section->getTranslation('title', 'fr');

// Get semua translasi
$all_titles = $section->getTranslations('title');
// Result: ['en' => 'Welcome...', 'de' => 'Willkommen...', 'fr' => 'Bienvenue...']
```

### Di Blade Template
```blade
@foreach(Section::where('is_active', true)->orderBy('order')->get() as $section)
    <h2>{{ $section->getTranslation('title', app()->getLocale()) }}</h2>
    <p>{{ $section->getTranslation('description', app()->getLocale()) }}</p>
@endforeach
```

### Set Translasi Baru
```php
$section = Section::find(1);
$section->setTranslation('title', 'en', 'New Title');
$section->setTranslation('title', 'de', 'Neuer Titel');
$section->save();
```

---

## 🔧 File-file Penting

1. **Model**: `app/Models/Section.php`
2. **Filament Resource**: `app/Filament/Resources/SectionResource.php`
3. **Resource Pages**:
   - `app/Filament/Resources/SectionResource/Pages/ListSections.php`
   - `app/Filament/Resources/SectionResource/Pages/CreateSection.php`
   - `app/Filament/Resources/SectionResource/Pages/EditSection.php`
4. **Migration**: `database/migrations/2026_03_01_070125_create_sections_table.php`
5. **Seeder**: `database/seeders/SectionSeeder.php`

---

## 📌 Fitur yang Sudah Ready

- ✅ Multi-language (EN, DE, FR) support
- ✅ Admin interface dengan tabbed translations
- ✅ Create, Read, Update, Delete (CRUD) full
- ✅ Image upload support
- ✅ Active/Inactive toggle
- ✅ Ordering/sorting
- ✅ Search functionality
- ✅ Responsive admin panel

---

## 🎯 Top Tip

Untuk menampilkan sections sesuai bahasa yang dipilih user:

```php
// Di controller atau Blade
$locale = app()->getLocale(); // 'en', 'de', 'fr'
$sections = Section::where('is_active', true)
                    ->orderBy('order')
                    ->get()
                    ->each(fn($s) => $s->setLocale($locale));
```

Atau di Filament Resource table, tambahkan language filter untuk menampilkan translasi sesuai bahasa.

---

**Setup Selesai! Happy multilingual CMS management! 🎉**
