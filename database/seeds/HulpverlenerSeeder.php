<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\hulpverleners;

class HulpverlenerSeeder extends Seeder {

  public function run()
  {

    Eloquent::unguard();

    hulpverleners::create(array(
      'voornaam' => 'Thibault',
      'achternaam' => 'Lesuisse',
      'telefoonnummer' => '047452134',
      'email' => 'thibault@lesuisse.com',
      'categorie' => "Verpleger",
      'adres' => 'Hogeweg 69 Erembodegem'
    ));

    hulpverleners::create(array(
      'voornaam' => 'Patrick',
      'achternaam' => 'LeGrand',
      'telefoonnummer' => '0474195602',
      'email' => 'patrick@legrand.com',
      'categorie' => "Kinesist",
      'adres' => 'Engelstraat Aalst Belgie'
    ));
    hulpverleners::create(array(
      'voornaam' => 'Fiona',
      'achternaam' => 'Van Rassum',
      'telefoonnummer' => '04742548602',
      'email' => 'fiona@vanrassum.com',
      'categorie' => "Podoloog",
      'adres' => 'Gudstraat Aalst Belgie'
    ));
    hulpverleners::create(array(
      'voornaam' => 'Marion',
      'achternaam' => 'De Beurder',
      'telefoonnummer' => '04745488602',
      'email' => 'marion@debeurder.com',
      'categorie' => "Verplegeester",
      'adres' => 'Ukkel Sint-Jobsesteenweg 93'
    ));
    hulpverleners::create(array(
      'voornaam' => 'Geoffrey',
      'achternaam' => 'Van den Bossche',
      'telefoonnummer' => '04745548602',
      'email' => 'geoffrey@vandenbossche.com',
      'categorie' => "Chirurg",
      'adres' => 'Aartstraat Aalst Belgie'
    ));
  }
}
