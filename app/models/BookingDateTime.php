<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class BookingDateTime extends Model implements AuthenticatableContract {

  use Authenticatable;

  protected $table = 'booking_datetimes';
  protected $fillable = ['booking_datetime', 'userID'];
  protected $guarded = ['id', 'created_at', 'updated_at'];

  public static function addAvailability($paramDate, $userid)
  {
  	BookingDateTime::create([
  		'booking_datetime' => $paramDate,
      'userID' => $userid
  	]);
  }

  public function scopeTimeBetween($query, $begin, $end) {
    return $query->where('booking_datetime', '>=', $begin)->where('booking_datetime', '<', $end);
  }

}
