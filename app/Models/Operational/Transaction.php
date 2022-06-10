<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    //use hasfactory
    use SoftDeletes;

    //declare table
    public $table = 'transaction';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function appointment() {

        // 2 parameter (path model, field foreign key)
        return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}
