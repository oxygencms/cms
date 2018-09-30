<?php

namespace App\Models;

use Oxygencms\Core\Models\Model;
use Spatie\Translatable\HasTranslations;

class Phrase extends Model
{
    use HasTranslations;

    /**
     * Attributes that should be mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'group', 'key', 'text',
    ];

    public $translatable = ['text'];

    public $appends = ['model_name'];

    /**
     * @param string $group
     * @param string $locale
     * @return array
     */
    public static function getGroup(string $group, string $locale): array
    {
        return static::query()
                     ->where('group', $group)
                     ->pluck('text', 'key')
                     ->all();
    }
}
