<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
// laravel permission
use Spatie\Permission\Traits\HasRoles;

class Tables extends Model {
    //use HasRoles;
    protected $guard_name = 'web'; 
    protected $table = TBL_TABLES;

}
