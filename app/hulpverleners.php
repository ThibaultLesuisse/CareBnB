<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class hulpverleners extends Model
{
  use Authenticatable;
  protected $table = 'hulpverlener';
  protected $fillable = array('voornaam', 'achternaam', 'telefoonnummer', 'email', 'wants_updates', 'categorie', 'adres');
  protected $guarded = array('id', 'created_at', 'updated_at');





  public static function hulpverlenerToevoegen() {

    // We get appointment information then set up our validator
    $info = Session::get('hulpverlenerInfo');
    $validator = Validator::make(
      array(
        'voornaam'  =>  $info['fname'],
        'achternaam'   =>  $info['lname'],
        'email'       =>  $info['email'],
        'categorie'   => $info['categorie'],
        'adres'       =>$info['adres']
      ),
      array(
        'first_name'  =>  'exists:customers,first_name',
        'last_name'   =>  'exists:customers,last_name',
        'email'       =>  'exists:customers,email',
        'categorie'   =>  'exists:customers,categorie',
        'adres'       =>  'exists:customers,adres'
      )
    );

    // If the validator fails, that means the user does not exist
    // If any of those three variables don't exist, we create a new user
    // This is so that families can use the same e-mail to book, but
    // We stil create a new user for them in the database.
    if ($validator->fails()) {
      // Registering the new user
      return hulpverleners::create(array(
        'voornaam'  =>  $info['fname'],
        'achternaam'   =>  $info['lname'],
        'telefoonnummer' => $info['number'],
        'email'       =>  $info['email'],
        'categorie'       =>  $info['categorie'],
        'adres'       =>  $info['adres'],
        'wants_updates' => Session::get('updates')
        ))->id;
    } else {
      return hulpverleners::where('email', $info['email'])->pluck('id');
    }

  }
  

    //
}
