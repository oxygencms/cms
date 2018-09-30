<?php

namespace App\Models;

use Oxygencms\Core\Traits\CommonQueries;
use Oxygencms\Core\Traits\CommonAccessors;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use CommonAccessors, CommonQueries;
}
