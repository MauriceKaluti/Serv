<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
use App\BookEvent;
use App\EventImage; 
use Image;
use App\Contact;
use App\Enquiry;
use App\Dharura;
use App\MsafiriPsv;
use App\MsafiriMoto;
use Illuminate\Http\Response;
use Storage;
use Illuminate\Support\Facades\Input;
use App\RescueFirst;
use App\RescueFire;
use App\RescueMedical;
use App\RescueRoad;
use App\AirQuote;
use File; 
use App\MedicalIndividual;
use App\MedicalFamily;
use App\MedicalCorporate;
use App\MedicalInstitution;
use App\MedicalResidence;
use App\MedicalEstate;
use App\FirePackage;
use App\Fanaka;
use App\Kikwetu;
use App\EmergencyRoad; 
// use Charts;
use App\Charts\DashboardChart;
use App\Charts\RevenueChart;

class DataController extends Controller
{
    //


// Memberships: Road
    
      public function roadSaloon() { 
        
        $saloons = EmergencyRoad::where('vehicle_type','Saloon')->get();

        return view( 'admin.memberships.road.saloon', compact( 'saloons') );
    }


     public function deleteroadSaloon($id=null){
        $delSaloon = EmergencyRoad::where('id', '=', $id)->firstOrFail();
        $delSaloon->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


 	public function roadSuv() { 

        
        $suvs = EmergencyRoad::where('vehicle_type','SUV')->get();

        return view( 'admin.memberships.road.suv', compact( 'suvs') );
    }


     public function deleteroadSuv($id=null){
        $delSuv = EmergencyRoad::where('id', '=', $id)->firstOrFail();
        $delSuv->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }



     	public function roadBus() { 
        
        $buss = EmergencyRoad::where('vehicle_type','Bus')->get();

        return view( 'admin.memberships.road.bus', compact( 'buss') );
    }


     public function deleteroadBus($id=null){
        $delBus = EmergencyRoad::where('id', '=', $id)->firstOrFail();
        $delBus->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


     public function roadTruck() { 
        
        $trucks = EmergencyRoad::where('vehicle_type','Truck')->get();

        return view( 'admin.memberships.road.truck', compact( 'trucks') );
    }


     public function deleteroadTruck($id=null){
        $delTruck = EmergencyRoad::where('id', '=', $id)->firstOrFail();
        $delTruck->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


// Memberships: Fire
    
      public function fireInstitution() { 
        
        $insts = FirePackage::where('package_type','Institution')->get();

        return view( 'admin.memberships.fire.institution', compact( 'insts') );
    }


     public function deletefireInstitution($id=null){
        $delInst = FirePackage::where('id', '=', $id)->firstOrFail();
        $delInst->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


   public function fireResidence() { 
        
        $resDs = FirePackage::where('package_type','Residence')->get();

        return view( 'admin.memberships.fire.residence', compact( 'resDs') );
    }


     public function deletefireResidence($id=null){
        $delRes = FirePackage::where('id', '=', $id)->firstOrFail();
        $delRes->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


       public function fireCorporate() { 
        
        $corps = FirePackage::where('package_type','Corporate')->get();

        return view( 'admin.memberships.fire.corporate', compact( 'corps') );
    }


     public function deletefireCorporate($id=null){
        $delCorp = FirePackage::where('id', '=', $id)->firstOrFail();
        $delCorp->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


    public function fireHotel() { 
        
        $hotels = FirePackage::where('package_type','Hotel')->get();

        return view( 'admin.memberships.fire.hotel', compact( 'hotels') );
    }


     public function deletefireHotel($id=null){
        $delHot = FirePackage::where('id', '=', $id)->firstOrFail();
        $delHot->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


        public function fireEstate() { 
        
        $estates = FirePackage::where('package_type','Estate')->get();

        return view( 'admin.memberships.fire.estate', compact( 'estates') );
    }


     public function deletefireEstate($id=null){
        $delEst = FirePackage::where('id', '=', $id)->firstOrFail();
        $delEst->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }




    // Memberships: Medical
    
      public function medicalInstitution() { 
        
        $insts = MedicalInstitution::get();

        return view( 'admin.memberships.medical.institution', compact( 'insts') );
    }


     public function deletemedicalInstitution($id=null){
        $delInst = MedicalInstitution::where('id', '=', $id)->firstOrFail();
        $delInst->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


   public function medicalResidence() { 
        
        $resDs = MedicalResidence::get();

        return view( 'admin.memberships.medical.residence', compact( 'resDs') );
    }


     public function deletemedicalResidence($id=null){
        $delRes = MedicalResidence::where('id', '=', $id)->firstOrFail();
        $delRes->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


       public function medicalCorporate() { 
        
        $corps = MedicalCorporate::get();

        return view( 'admin.memberships.medical.corporate', compact( 'corps') );
    }


     public function deletemedicalCorporate($id=null){
        $delCorp = MedicalCorporate::where('id', '=', $id)->firstOrFail();
        $delCorp->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


    public function medicalFamily() { 
        
        $familys = MedicalFamily::get();

        return view( 'admin.memberships.medical.family', compact( 'familys') );
    }


     public function deletemedicalFamily($id=null){
        $delFam = MedicalFamily::where('id', '=', $id)->firstOrFail();
        $delFam->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


        public function medicalEstate() { 
        
        $estates = MedicalEstate::get();

        return view( 'admin.memberships.medical.estate', compact( 'estates') );
    }


     public function deletemedicalEstate($id=null){
        $delEst = MedicalEstate::where('id', '=', $id)->firstOrFail();
        $delEst->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


      public function medicalIndividual() { 
        
        $individuals = MedicalIndividual::get();

        return view( 'admin.memberships.medical.individual', compact( 'individuals') );
    }


     public function deletemedicalIndividual($id=null){
        $delEst = MedicalIndividual::where('id', '=', $id)->firstOrFail();
        $delEst->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }



}
