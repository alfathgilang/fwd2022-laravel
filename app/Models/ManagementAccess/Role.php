<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'role';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //many to many
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function permission()
    {
        return $this->belongsToMany('App\Models\ManagementAccess\Permission');
    }

    public function role_user() {
        // 2 parameter (path mode, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\RoleUser','role_id');
    }

    public function permission_role() {
        // 2 parameter (path mode, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','role_id');
    }
}
