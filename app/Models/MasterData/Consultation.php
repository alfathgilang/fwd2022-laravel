<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'config_payment';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function appointment() {

        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment.php', 'consultation_id');
    }
}
