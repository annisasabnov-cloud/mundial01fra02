<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SectionContent extends Model
{
    use HasTranslations;

    protected $table = 'section_contents';

    protected $fillable = [
        'section_key',
        'content_type',
        'image',
        'icon',
        'css_class',
        'is_visible',
        'sort_order',
        'title',
        'subtitle',
        'description',
        'button_text',
        'button_link',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description',
        'button_text',
        'button_link',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    // Scope untuk mendapatkan konten yang visible saja
    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    // Scope untuk filter by section
    public function scopeBySection($query, $sectionKey)
    {
        return $query->where('section_key', $sectionKey);
    }

    // Scope untuk order
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }
}
