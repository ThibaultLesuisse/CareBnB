<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Session;


class Appointment extends Model implements AuthenticatableContract{

    use authenticatable;

  	protected $table = 'appointments';
    protected $fillable = array('userID', 'appointment_type', 'appointment_datetime');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /**
     * Customer relation
     * Appointment has one customer
     */
    public function customer()
    {
      return $this->hasOne('App\models\Customer', 'id', 'userID');
    }

    public static function addAppointment($userID) {
      $info = Session::get('appointmentInfo');
      Appointment::create(array(
        'userID'  => $userID,
        'appointment_type'  =>  $info['hid'],
        'appointment_datetime'  =>  $info['datetime']
      ));
    }

    public function scopeTimeBetween($query, $begin, $end) {
      //return $query->whereBetween('appointment_datetime', array($begin, $end));
      return $query->where('appointment_datetime', '>', $begin)->where('appointment_datetime', '<', $end);
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
