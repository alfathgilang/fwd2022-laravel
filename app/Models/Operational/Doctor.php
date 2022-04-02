<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'doctor';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function specialist() {

        // 2 parameter (path model, field foreign key)
        return $this->belongsTo('App\Models\Operational\Specialist.php', 'specialist_id', 'id');
    }

    // one to many
    public function appointment() {

        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment.php', 'doctor_id');
    }
}
