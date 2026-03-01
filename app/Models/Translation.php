<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translations';

    protected $fillable = [
        'key',
        'language',
        'section',
        'value',
        'type',
    ];

    // Scope untuk filter by language
    public function scopeByLanguage($query, $language)
    {
        return $query->where('language', $language);
    }

    // Scope untuk filter by section
    public function scopeBySection($query, $section)
    {
        if ($section) {
            return $query->where('section', $section);
        }
        return $query;
    }

    // Scope untuk filter by key
    public function scopeByKey($query, $key)
    {
        return $query->where('key', $key);
    }

    // Static helper methods
    public static function get($key, $language = null, $default = null)
    {
        $lang = $language ?? session('language') ?? app()->getLocale();
        
        $translation = self::where('key', $key)
            ->where('language', $lang)
            ->first();
        
        return $translation ? $translation->value : ($default ?? $key);
    }

    public static function getBySection($section, $language = null)
    {
        $lang = $language ?? session('language') ?? app()->getLocale();
        
        return self::where('section', $section)
            ->where('language', $lang)
            ->pluck('value', 'key')
            ->toArray();
    }

    public static function getAllLanguages()
    {
        return self::distinct()->pluck('language')->toArray();
    }
}
