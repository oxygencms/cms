<?php

namespace App\Models;

use App\Traits\CommonQueries;
use App\Traits\CommonAccessors;
use Illuminate\Database\Eloquent\Model as EloquentModel;

abstract class Model extends EloquentModel
{
    use CommonAccessors, CommonQueries;
}
