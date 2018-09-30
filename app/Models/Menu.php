<?php

namespace App\Models;

use App\Traits\MenuMutators;
use Oxygencms\Core\Models\Model;

class Menu extends Model
{
    use MenuMutators;

    /**
     * @var array $guarded
     */
    public $guarded = [];

    /**
     * @var array $casts
     */
    public $casts = ['attrs' => 'array'];

    public $appends = ['model_name'];

    /**
     * Links of the menu.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
