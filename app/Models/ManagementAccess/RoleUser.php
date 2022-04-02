<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'role_user';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user() {

        // 3 parameter
        return $this->belongsTo('App\Models\User.php', 'user_id', 'id');
    }

    public function role() {

        // 3 parameter
        return $this->belongsTo('App\Models\ManagementAccess\Role.php', 'role_id', 'id');
    }
}
