<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Eloquent::unguard();

      User::create(array(
        'name' => 'Anton',
        'lastname' => 'De Brandere',
        'telefoonnummer' => '047452134',
        'email' => 'thibault@lesuisse.com',
        'categorie' => "Verpleger",
        'adres' => 'Hogeweg 69 Erembodegem',
        'password' => 'test123',
        'type' => 'Hulpverlener'
      ));
      User::create(array(
        'name' => 'Patrick',
        'lastname' => 'LeGrand',
        'telefoonnummer' => '0474195602',
        'email' => 'patrick@legrand.com',
        'categorie' => "Kinesist",
        'adres' => 'Engelstraat Aalst Belgie'
        'password' => 'test123',
        'type' => 'Hulpverlener'
      ));
      User::create(array(
        'name' => 'Fiona',
        'lastname' => 'Van Rassum',
        'telefoonnummer' => '04742548602',
        'email' => 'fiona@vanrassum.com',
        'categorie' => "Podoloog",
        'adres' => 'Gudstraat Aalst Belgie'
        'password' => 'test123',
        'type' => 'Hulpverlener'
      ));
      User::create(array(
        'name' => 'Marion',
        'lastname' => 'De Beurder',
        'telefoonnummer' => '04745488602',
        'email' => 'marion@debeurder.com',
        'categorie' => "Verplegeester",
        'adres' => 'Ukkel Sint-Jobsesteenweg 93'
        'password' => 'test123',
        'type' => 'Hulpverlener'
      ));
      User::create(array(
        'name' => 'Geoffrey',
        'lastname' => 'Van den Bossche',
        'telefoonnummer' => '04745548602',
        'email' => 'geoffrey@vandenbossche.com',
        'categorie' => "Chirurg",
        'adres' => 'Aartstraat Aalst Belgie'
        'password' => 'test123',
        'type' => 'Hulpverlener'
      ));

    }
}
