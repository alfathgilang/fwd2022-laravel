<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'detail_user';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function type_user() {

        // 3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\TypeUser.php', 'type_user_id', 'id');
    }

    // one to many
    public function user() {

        // 3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\User.php', 'user_id', 'id');
    }
}
