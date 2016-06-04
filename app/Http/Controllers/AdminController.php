<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Package;
use App\Models\Customer;
use App\Models\Configuration;
use App\Models\TimeInterval;

use App\Models\Hulpverleners;

use Input;
use Auth;
use View;
class AdminController extends Controller {


  public function __construct()
	{
		$this->middleware('auth');
    $this->middleware('hulpverlener');
	}
  /**
   * Function to retrieve the index page
   */
  public function index()
  {

    return view('admin/appointments');
  }

  /**
   * Function to attempt authorization, and redirect to admin page if successful, redirect to login with errors if not
   */


  public function appointments()
  {
    return view('admin/appointments');
  }

  public function availability()
  {
    return view('admin/availability');
  }

  public function configuration()
  {
    $configuration = Configuration::with('timeInterval')->first();
    return view('admin/configuration', ['configuration' => $configuration]);
  }

  /**
   * View function for list of packages
   * @return view
   */
  public function packages() {
    $hulpverleners = hulpverleners::all();
    return view('admin/packages/index', ['hulpverleners' => $hulpverleners]);
  }

  /**
   * View Function to edit package information
   * @param  int $package_id
   * @return view
   */
  public function editPackage($package_id)
  {
    return view('admin/packages/editPackage', ['package' => Package::find($package_id)]);
  }

  public function updatePackage($package_id)
  {
    dd('tets');
  }

  public function anySetTime()
  {
    dd('test');
  }

}
