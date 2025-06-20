<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUniqueSlug
{
    public static function generateUniqueSlug(string $name, string $column = 'slug'): string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (static::where($column, $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}