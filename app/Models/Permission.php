<?php

namespace App\Models;

use App\Traits\CommonQueries;
use App\Traits\CommonAccessors;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use CommonAccessors, CommonQueries;
}
