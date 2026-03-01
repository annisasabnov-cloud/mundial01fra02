# Translation Usage Guide

This guide demonstrates how to use the translation system in your Blade templates and PHP code.

## Using trans_db() Helper

The `trans_db()` helper function retrieves translations from the database with the following syntax:

```php
trans_db($key, $language = null, $default = 'key')
```

- **$key**: The translation key (e.g., 'page.home.title')
- **$language**: (optional) Specific language code ('en', 'de', 'fr'). If null, uses current locale
- **$default**: (optional) Default value if translation not found

## Examples in Blade Templates

### Page Headings
```blade
<h1>{{ trans_db('page.home.heading') }}</h1>
<h2>{{ trans_db('page.home.subtitle') }}</h2>
<p>{{ trans_db('page.home.description') }}</p>
```

### Navigation
```blade
<nav>
    <a href="/en/home">{{ trans_db('nav.home', 'en') }}</a>
    <a href="/de/start">{{ trans_db('nav.start', 'de') }}</a>
    <a href="/fr/preise">{{ trans_db('nav.pricing', 'fr') }}</a>
</nav>
```

### Forms
```blade
<form>
    <button type="submit" class="btn">{{ trans_db('button.submit') }}</button>
    <button type="reset" class="btn-secondary">{{ trans_db('button.cancel') }}</button>
</form>
```

### Error Pages
```blade
<!-- In 404.blade.php -->
<h1>{{ trans_db('page.error.title_404') }}</h1>
<p>{{ trans_db('page.error.message_404') }}</p>

<!-- In 401.blade.php -->
<h1>{{ trans_db('page.error.title_401') }}</h1>
<p>{{ trans_db('page.error.message_401') }}</p>
```

### Footer
```blade
<footer>
    <p>{{ trans_db('footer.copyright') }}</p>
    <nav>
        <a href="#">{{ trans_db('footer.about') }}</a>
        <a href="#">{{ trans_db('footer.privacy') }}</a>
        <a href="#">{{ trans_db('footer.terms') }}</a>
    </nav>
</footer>
```

## Using trans_db() in PHP Classes

```php
namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function show()
    {
        $title = trans_db('page.home.title');
        $subtitle = trans_db('page.home.subtitle', 'de'); // German
        
        return view('product.show', [
            'title' => $title,
            'subtitle' => $subtitle,
        ]);
    }
}
```

## Available Translation Keys

### Navigation Keys
- `nav.home` - Home page link text
- `nav.start` - Start page link text
- `nav.offers` - Offers page link text
- `nav.pricing` - Pricing page link text
- `nav.contact` - Contact page link text

### Page Keys (page.{pageName}.{fieldName})
- `page.home.title` - Page title tag
- `page.home.heading` - Page heading
- `page.home.subtitle` - Page subtitle
- `page.home.description` - Page description
- Similar patterns for: start, pricing, offers, contact, task, etc.

### Button Keys
- `button.submit` - Submit button text
- `button.cancel` - Cancel button text
- `button.learn_more` - Learn More button text
- `button.contact_us` - Contact Us button text

### Footer Keys
- `footer.copyright` - Copyright notice
- `footer.about` - About Us link text
- `footer.privacy` - Privacy Policy link text
- `footer.terms` - Terms & Conditions link text

### Error Page Keys
- `page.error.title_404` - 404 error title
- `page.error.message_404` - 404 error message
- `page.error.title_401` - 401 error title
- `page.error.message_401` - 401 error message

## Managing Translations in Filament

All translations can be managed through the Filament Admin Panel:

1. Navigate to **Administration Panel** → **Translations**
2. View all translations organized by:
   - **Key**: The translation identifier
   - **Language**: Colored badge (English/info, German/warning, French/success)
   - **Section**: Category (pages.home, pages.contact, etc.)
   - **Type**: Text/HTML/JSON
   - **Value**: The actual translation text

3. **Create new translation**: Click "New" button
4. **Edit existing**: Click on any row
5. **Delete**: Use delete action
6. **Filter**: By language, section, or type
7. **Search**: Search by key or value

## How Translation Retrieval Works

1. `trans_db()` checks the translations table in the database
2. If language not specified, uses current session language (from middleware)
3. Returns the translation value if found
4. Returns the default (key name) if not found
5. All results are cached for performance

## Supported Languages

- **en** - English
- **de** - German (Deutsch)
- **fr** - French (Français)

## Current Locale

The current language locale is determined by:
1. Session value (set via `/lang/{language}` route)
2. Middleware `SetLanguageLocale` manages this automatically
3. Can be manually set with `set_locale($language)`
4. Can be retrieved with `get_locale()`

## Adding New Translation Keys

To add new translation keys:

1. Open Filament Admin → Translations
2. Click "New Translation"
3. Fill in:
   - **Key**: e.g., `page.newpage.section.field`
   - **Language**: en/de/fr
   - **Section**: Categorize it (e.g., pages.newpage)
   - **Type**: Text (most common)
   - **Value**: The actual text in that language
4. Save
5. Repeat for other languages

Or add directly in seeder and run `php artisan db:seed`

## Best Practices

1. **Key Naming**: Use dot notation (page.section.field)
2. **Consistency**: Always translate all keys in all supported languages
3. **Organization**: Group related keys by section
4. **Management**: Use Filament for runtime changes, seeders for initial data
5. **Caching**: Results are cached; clear cache after manual database updates
6. **Defaults**: Always provide a sensible default value
