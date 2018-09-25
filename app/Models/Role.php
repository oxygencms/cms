<?php

namespace App\Models;

use App\Traits\CommonQueries;
use App\Traits\CommonAccessors;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use CommonAccessors, CommonQueries;
}
