<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'permission_role';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function permission() {

        // 3 parameter
        return $this->belongsTo('App\Models\ManagementAccesss\Permission', 'permission_id', 'id');
    }

    public function role() {

        // 3 parameter
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
