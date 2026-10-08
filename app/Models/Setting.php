<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get(string $key, ?string $default = null): ?string
    {
        try {
            return static::query()->where('key', $key)->value('value') ?? $default;
        } catch (\Throwable) {
            // table not migrated yet (e.g. during first deploy) — fall back
            return $default;
        }
    }

    public static function set(string $key, ?string $value): void
    {
        static::query()->updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
