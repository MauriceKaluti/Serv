<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
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
use App\BlogPost; 
use App\BlogCategory; 
use App\BlogSubscriber; 
// use Charts;
use App\Charts\DashboardChart;
use App\Charts\RevenueChart;

use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{



    // Events
     public function add_event()
    {
        //

         $showevents = Event::get();

         // return view('admin.extras.add_event');

         return view( 'admin.extras.add_event', compact('showevents'));
   
    }

         public function profileUpdate()
    {
        //
      $adm = 1;
         $admins = User::where( 'admin', '=', $adm )->get();

         // return view('admin.extras.add_event');

         return view( 'admin.extras.update_profile', compact('admins'));
   
    }


   public function storeProfile(Request $request)
    {
      $id = $request->user_id;
      $pass = $request->password;
      $pwd = bcrypt($pass);
        
      $user = User::find($id)->update(['name' => $request->name,'email' => $request->email,'password'=>$pwd]);

        return redirect()->back()->with('success', 'Profile Updated Successfully');

 
 }



   public function storeAdmin(Request $request)
    {
     
 

  if ($request->isMethod('post')) {
            
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $adminDef = 1;

            $adminNew = new User;
            $adminNew->name = $data['name'];
            $adminNew->email = $data['email'];
            $adminNew->admin = $adminDef;
            $adminNew->password = Hash::make($data['password']);
           

            $adminNew->save();

        return redirect()->back()->with('adminsuccess', 'Admin Added Successfully');
            
            
        }


 
 }




    public function deleteAdmin($id=null){

        $delAd = User::where('id', '=', $id)->firstOrFail();
        $delAd->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

    public function store_event(Request $request)
    {
        // save 

        $events = Event::create( $request->all() );

        // event image

         if ( $request->hasFile( 'image' ) ) {
            $image_tmp =$request->image;
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/eventImages/large/' . $filename;
                $medium_image_path = 'images/eventImages/medium/' . $filename;         

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 279, 165 )->save( $medium_image_path );
           
                // Storing Image
                // $product->image = $filename;
                $events['image'] = $filename;
            }

        }
 
        $events->save(); 

        // redirect to same page        

        return redirect()->back()->with('success', 'Event Created Successfully'); 

    }

    // public function deleteEvent( $id ) {

    //     $event = Event::destroy( $id );

    //    return redirect()->back()->with('deletesuccess', 'Event Deleted Successfully'); 
         
    // }

       public function deleteEvent($id=null){
        $event = Event::where('id', '=', $id)->firstOrFail();
        $event->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


    public function deleteEventTicket($id=null){
        $eventtckt = BookEvent::where('id', '=', $id)->firstOrFail();
        $eventtckt->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

        public function deleteEventPartner($id=null){
        $eventpart = EventImage::where('id', '=', $id)->firstOrFail();
        $eventpart->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

        public function deleteMessage($id=null){
        $message = Contact::where('id', '=', $id)->firstOrFail();
        $message->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

        public function deleteEnquiry($id=null){
        $enquiry = Enquiry::where('id', '=', $id)->firstOrFail();
        $enquiry->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


       public function deleteDharura($id=null){
        $dharura = Dharura::where('id', '=', $id)->firstOrFail();
        $dharura->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

          public function deleteMsafiriPsv($id=null){
        $msafiripsv = MsafiriPsv::where('id', '=', $id)->firstOrFail();
        $msafiripsv->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


      public function deleteMsafiriMoto($id=null){
        $msafirimoto = MsafiriMoto::where('id', '=', $id)->firstOrFail();
        $msafirimoto->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

         public function deleteRescueFirst($id=null){
        $delFirst = RescueFirst::where('id', '=', $id)->firstOrFail();
        $delFirst->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }

         public function deleteRescueFire($id=null){
        $delFire = RescueFire::where('id', '=', $id)->firstOrFail();
        $delFire->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


         public function deleteRescueMedical($id=null){
        $delMedical = RescueMedical::where('id', '=', $id)->firstOrFail();
        $delMedical->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


         public function deleteRescueRoad($id=null){
        $delRoad = RescueRoad::where('id', '=', $id)->firstOrFail();
        $delRoad->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


            public function deleteQuote($id=null){
        $deleteQuot = AirQuote::where('id', '=', $id)->firstOrFail();
        $deleteQuot->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


            public function deleteFanaka($id=null){
        $deleteFana = Fanaka::where('id', '=', $id)->firstOrFail();
        $deleteFana->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }



        public function addEventImages($id, Request $request)
    {

        $event = Event::where( 'id', $id )->first(); 
 
        $showeventspartners = EventImage::get();


        // return view        

        return view( 'admin.extras.add_event_images', compact('event','showeventspartners','eventdetails') );

    } 


    public function storeEventImages($id=null, Request $request){


        if ($request->isMethod('post')) {
            
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;


                // New Upload Method //

        if ($request->hasFile('image')) {

            // New Code Upload

            $files = $request->file('image');

          
                 foreach($files as $file){
                $eventimages = new EventImage;
                $extension         = $file->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;

                $large_image_path  = 'images/eventtimages/large/' . $filename;
               
                $small_image_path  = 'images/eventtimages/small/' . $filename;

                // Resize Imgs
                Image::make( $file )->save( $large_image_path );
              
                Image::make( $file )->resize( 480, 415 )->save( $small_image_path );
                // Storing Image
                
                $eventimages->image = $filename;

                $eventimages->event_id = $data['event_id'];

               
                $eventimages->save();
            }
   
        }

            

            // return back();

             return redirect()->back()->with('success', 'Event Created Successfully'); 

        }
    } 






        public function show_events() {
        

        $showevents = Event::get();
     

        return view( 'admin.extras.add_event', compact('showevents') );
    }



        public function show_events_tickets() {
        //get all the tickets

        $tickets = BookEvent::get();

        return view( 'admin.extras.show_tickets', compact( 'tickets' ) );
    }


          public function contact_messages() {
        //get all the messages

        $messages = Contact::get();

        return view( 'admin.extras.show_messages', compact( 'messages' ) );
    }

          public function showEnquiries() {
        //get all the enquiries

        $enquiries = Enquiry::get();

        return view( 'admin.extras.show_enquiries', compact( 'enquiries' ) );
    }



        // Dharura

      public function dharuraPlatinum() {         

        // $dharuraPlatinums = Dharura::get();
        $dharuraPlatinums = Dharura::where('dharura_package','Platinum')->get();

        // var_dump($dharuraPlatinums); die();

        return view( 'admin.products.dharura_platinum', compact( 'dharuraPlatinums') );
    }


          public function dharuraGold() {         

        
        $dharuraGolds = Dharura::where('dharura_package','Gold')->get();


        return view( 'admin.products.dharura_gold', compact( 'dharuraGolds') );
    }


      public function dharuraBronze() {         

        
        $dharuraBronzes = Dharura::where('dharura_package','Bronze')->get();


        return view( 'admin.products.dharura_bronze', compact( 'dharuraBronzes') );
    }


      public function dharuraSilver() {         

        
        $dharuraSilvers = Dharura::where('dharura_package','Silver')->get();


        return view( 'admin.products.dharura_silver', compact( 'dharuraSilvers') );
    }

    // Fanaka

    

      public function Fanaka() {         

        
        $fanakas = Fanaka::get();


        return view( 'admin.products.fanaka', compact( 'fanakas'));
    }

// Msafiri

    public function msafiriPSV() {         

        
        $msafpsvs = MsafiriPsv::get();


        return view( 'admin.products.msafiri_psv', compact( 'msafpsvs') );
    }


     public function msafiriMoto() {         

        
        $msafmotos = MsafiriMoto::get();


        return view( 'admin.products.msafiri_moto', compact( 'msafmotos') );
    }

// Rescue Teams
     public function rescueFirst() {         

        
        $resFirsts = RescueFirst::get();


        return view( 'admin.rescue_teams.first', compact( 'resFirsts') );
    }

         public function rescueFire() {         

        
        $resFires = RescueFire::get();


        return view( 'admin.rescue_teams.fire', compact( 'resFires') );
    }

    public function rescueMedical() {         

        
        $resMedicals = RescueMedical::get();


        return view( 'admin.rescue_teams.medical', compact( 'resMedicals') );
    }



       public function rescueRoad() {         

        
        $resRoads = RescueRoad::get();


        return view( 'admin.rescue_teams.road', compact( 'resRoads') );
    }


    // Air Emergency Quotes

           public function airQuotes() {         

        
        $airQuotes = AirQuote::get();


        return view( 'admin.extras.air_quotes', compact( 'airQuotes') );
    }






    // Charts


    public function dashCharts () {

    //donut chart per year
    // line, doughnut, bar, 
   
   $d201314 = Dharura::where('dharura_package', 'Platinum')->sum('package_price');
   $d201415 = Dharura::where('dharura_package', 'Gold')->sum('package_price');
   $d201516 = Dharura::where('dharura_package', 'Silver')->sum('package_price');
   $d201617 = Dharura::where('dharura_package', 'Bronze')->sum('package_price');

   $dharuraTotal = Dharura::sum('package_price');

   // Colors

   $borderColors = [
    "rgba(255, 99, 132, 1.0)",
    "rgba(22,160,133, 1.0)",
    "rgba(255, 205, 86, 1.0)",
    "rgba(51,105,232, 1.0)",
    "rgba(244,67,54, 1.0)",
    "rgba(34,198,246, 1.0)",
    "rgba(153, 102, 255, 1.0)",
    "rgba(255, 159, 64, 1.0)",
    "rgba(233,30,99, 1.0)",
    "rgba(205,220,57, 1.0)"
];


    $fillColors = [
        "rgba(255, 99, 132, 0.2)",
        "rgba(22,160,133, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(51,105,232, 0.2)",
        "rgba(244,67,54, 0.2)",
        "rgba(34,198,246, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(233,30,99, 0.2)",
        "rgba(205,220,57, 0.2)"

    ];

// Chart 1
 $pp = 0;
   $medStat =  MedicalCorporate::where('id', '!=', $pp)->sum('emergency_med_corp_price');
   $medStat1 =  MedicalEstate::where('id', '!=', $pp)->sum('emergency_med_estate_price');
   $medStat2 =  MedicalFamily::where('id', '!=', $pp)->sum('emergency_med_fam_price');
   $medStat3 =  MedicalIndividual::where('id', '!=', $pp)->sum('emergency_med_ind_price');
   $medStat4 =  MedicalInstitution::where('id', '!=', $pp)->sum('emergency_med_inst_price');

   $medStatTotal = $medStat + $medStat1 + $medStat2 + $medStat3 + $medStat4;
   


  $meD = new DashboardChart;
  $meD->title('Medical Memberships Cash Flow (Ksh)');
  $meD->minimalist(true);
  $meD ->labels(['Corporate', 'Estates', 'Family', 'Individual', 'Institution']);
  $meD->dataset('Medical Memberships Revenue', 'bar', [$medStat, $medStat1,$medStat2,$medStat3,$medStat4])
  ->color($borderColors)
  ->backgroundcolor($borderColors);
 


// Chart 2


  $dough = new RevenueChart;
  $dough->title('Cash Flow(Ksh)');
  $dough->minimalist(true);
  $dough ->labels(['Platinum', 'Gold', 'Silver', 'Bronze']);
  $dough->dataset('Package Revenue', 'doughnut', [$d201314, $d201415, $d201516, $d201617])
   ->color($borderColors)
   ->backgroundcolor($borderColors); 


// Chart 3
 

   // $fana =  Fanaka::where('id', '!=', $pf)->sum('fanaka_price');
  $today = Carbon::now();
  $yesterday = Carbon::now()->subDays(1);
  $yesterday1 = Carbon::now()->subDays(3);
  $yesterday2 = Carbon::now()->subDays(5);



  $fana = Fanaka::whereDate('created_at', $today)->sum('fanaka_price');
  $fana1 = Fanaka::whereDate('created_at', $yesterday)->sum('fanaka_price');
  $fana2 = Fanaka::whereDate('created_at', $yesterday1)->sum('fanaka_price');
  $fana3 = Fanaka::whereDate('created_at', $yesterday2)->sum('fanaka_price');


  $fanakaTotal = Fanaka::sum('fanaka_price');


   // $fana =  Fanaka::where('id', '!=', $pf)->whereDate('created_at', today()->subDays($days_backwards))->sum('fanaka_price');



  $line = new DashboardChart;
  $line->title('Fanaka Duration Cash Flow (Ksh)');
  $line->minimalist(true);
  $line ->labels(['Today','Yesterday','3 Days Ago','1 Week Ago']);
  $line->dataset('Fanaka Revenue', 'line', [$fana,$fana1,$fana2,$fana3])
  ->color($borderColors)
  ->backgroundcolor($borderColors)
  ->fill(false)
  ->linetension(0.1)
  ->dashed([5]);


// Chart 4

  $kikwetu = Kikwetu::whereDate('created_at', $today)->sum('kikwetu_price');
  $kikwetu1 = Kikwetu::whereDate('created_at', $yesterday)->sum('kikwetu_price');
  $kikwetu2 = Kikwetu::whereDate('created_at', $yesterday1)->sum('kikwetu_price');
  $kikwetu3 = Kikwetu::whereDate('created_at', $yesterday2)->sum('kikwetu_price');


  $kikwetuTotal = Kikwetu::sum('kikwetu_price');

  $pie = new DashboardChart;
  $pie->title('Kikwetu Duration Cash Flow(Ksh)');
  $pie->minimalist(true);
  $pie ->labels(['Today','Yesterday','3 Days Ago','1 Week Ago']);
  $pie->dataset('Kikwetu Revenue', 'pie', [$kikwetu,$kikwetu1,$kikwetu2,$kikwetu3])
  ->color($borderColors)
  ->backgroundcolor($fillColors)
  ->fill(false)
  ->linetension(0.1)
  ->dashed([5]);


// Chart 5
  $psv = MsafiriPsv::whereDate('created_at', $today)->sum('psv_price');
  $psv1 = MsafiriPsv::whereDate('created_at', $yesterday)->sum('psv_price');
 


  $moto = MsafiriMoto::whereDate('created_at', $today)->sum('moto_price');
  $moto1 = MsafiriMoto::whereDate('created_at', $yesterday)->sum('moto_price');
 



  $msafiriPsvTotal = Kikwetu::sum('kikwetu_price');
  $msafiriMotoTotal = Kikwetu::sum('kikwetu_price');

  $msafiriTotal =  $msafiriPsvTotal + $msafiriMotoTotal;



  $radar = new DashboardChart;
  $radar->title('Cash Flow(Ksh)');
  $radar->minimalist(true);
  $radar ->labels(['PSV T', 'PSV Y', 'Moto T', 'Motorist Y']);
  $radar->dataset('Products Revenue', 'radar', [$psv, $psv1, $moto, $moto1])
  ->color($borderColors)
  ->backgroundcolor($borderColors)
  ->fill(false)
  ->linetension(0.1)
  ->dashed([5]);


// Chart 6
 
   $fireStat =  FirePackage::where('package_type', 'Institution')->sum('cost');
   $fireStat1 =  FirePackage::where('package_type', 'Corporate')->sum('cost');
   $fireStat2 =  FirePackage::where('package_type', 'Hotel')->sum('cost');
   $fireStat3 =  FirePackage::where('package_type', 'Residence')->sum('cost');
   $fireStat4 =  FirePackage::where('package_type', 'Estate')->sum('cost');

   $fireStatTotal = $fireStat + $fireStat1 + $fireStat2 + $fireStat3 + $fireStat4;

  $polarArea = new DashboardChart;
  $polarArea->title('Cash Flow(Ksh)');
  $polarArea->minimalist(true);
  $polarArea ->labels(['Institution', 'Corporate', 'Hotel', 'Residence', 'Estate']);
  $polarArea->dataset('Package Revenue', 'polarArea', [$fireStat, $fireStat1, $fireStat2, $fireStat3, $fireStat4])
  ->color($borderColors)
  ->backgroundcolor($borderColors)
  ->fill(false)
  ->linetension(0.1)
  ->dashed([5]);

 
// 7 Event Ticket Chart

  $data1 = BookEvent::where('event_entity', 'Private Sector')->sum('ticket_price');
  $data2 = BookEvent::where('event_entity', 'County Government')->sum('ticket_price');
  $data3 = BookEvent::where('event_entity', 'National Government')->sum('ticket_price');
  $data4 = BookEvent::where('event_entity', 'NGO')->sum('ticket_price');

  $totalBookTickets = BookEvent::sum('ticket_price');

  $dbline = new DashboardChart;
  $dbline->title('Event Ticket Flow(Ksh)');
  $dbline->minimalist(true);
  $dbline ->labels(['Private Sector', 'County Government', 'National Government', 'NGO']);
  $dbline->dataset('Entity Sales(Ksh)', 'line', [$data1, $data2, $data3, $data4])
  ->color($borderColors)
  ->backgroundcolor($borderColors)
  ->fill(true)
  ->linetension(0.1)
  ->dashed([5]);


// 8 All Sums Graph
  $comp = $medStatTotal;
  $comp1 = $fireStatTotal;

  $comp2 = $fanakaTotal + $msafiriTotal + $kikwetuTotal + $dharuraTotal;

  $comp3 = $totalBookTickets;

  $chart = new RevenueChart;
  $chart->title('Cash Flow Across Streams (Ksh)');
  $chart->minimalist(true);
  $chart ->labels(['Medical Memberships', 'Fire Memberships', 'Products', 'Extras']);
  $chart->dataset('Totals (Ksh)', 'bar', [$comp, $comp1, $comp2, $comp3])
   ->color($borderColors)
   ->backgroundcolor($borderColors); 

  // return view('admin.charts')->with(['chart' => $chart]);

   return view('admin.charts', [ 'chart' => $chart, 'dough' => $dough,'line' => $line, 'polarArea' => $polarArea,'pie' => $pie, 'radar' => $radar, 'dbline' => $dbline,'meD' => $meD ] );
    }







  public function storeEvent(Request $request){


        if ($request->isMethod('post')) {
            
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;


                // New Upload Method //


         $eventStores = new Event;

            if ( $request->hasFile( 'image' ) ) {
            $image_tmp =$request->image;
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/eventImages/large/' . $filename;
                $medium_image_path = 'images/eventImages/medium/' . $filename;         

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 279, 165 )->save( $medium_image_path );
           
                // Storing Image
                // $product->image = $filename;
               
            }

        }               


                $eventStores->image = $filename;

                $eventStores->title = $data['title'];
                $eventStores->date = $data['date'];
                $eventStores->details = $data['details'];
                $eventStores->location = $data['location'];
                $eventStores->map = $data['map'];

               
                $eventStores->save();

            

            // return back();

             return redirect()->back()->with('success', 'Event Created Successfully'); 

        }
    } 



    // Blog here


   public function blogAddPost()
    {
        //

      $blogposts = BlogPost::get();

    $categories = BlogCategory::get();


         return view( 'admin.blog.add_post', compact( [ 'categories', 'blogposts' ] ));

    }


       public function blogCategory()
    {
        //

        $blogcats = BlogCategory::get();


         return view( 'admin.blog.add_category', compact('blogcats'));
    }
    

           public function blogSubscribers()
    {
        //

        $subscribers = BlogSubscriber::get();


         return view( 'admin.blog.subscribers', compact('subscribers'));
    }
    


    public function storePost(Request $request)
    {
        // save 

        $posts = BlogPost::create( $request->all() );

        // blog image

         if ( $request->hasFile( 'image' ) ) {
            $image_tmp =$request->image;
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/blogimages/large/' . $filename;
                $medium_image_path = 'images/blogimages/medium/' . $filename;         

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 558, 330 )->save( $medium_image_path );
           
                // Storing Image
                $posts['image'] = $filename;
            }

        }
 
        $posts->save(); 

        // redirect to same page        

        return redirect()->back()->with('success', 'Blog Post Created Successfully'); 

    }


        public function storeCategory(Request $request)
    {
        // save 

        $cats = BlogCategory::create( $request->all() );

        // blog image

         if ( $request->hasFile( 'image' ) ) {
            $image_tmp =$request->image;
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/categoryimages/large/' . $filename;
                $medium_image_path = 'images/categoryimages/medium/' . $filename;         

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 200, 200 )->save( $medium_image_path );
           
                // Storing Image
                $cats['image'] = $filename;
            }

        }
 
        $cats->save(); 

        // redirect to same page        

        return redirect()->back()->with('success', 'Blog Post Category Created Successfully'); 

    }

 
       public function deletePost($id=null){
        $delPost = BlogPost::where('id', '=', $id)->firstOrFail();
        $delPost->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }



   public function deleteCategory($id=null){
        $delCat = BlogCategory::where('id', '=', $id)->firstOrFail();
        $delCat->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }


       public function deleteSubscriber($id=null){
        $delSubsc = BlogSubscriber::where('id', '=', $id)->firstOrFail();
        $delSubsc->delete();
        return redirect()->back()->with('deletesuccess', 'successfully deleted record');

    }
 
}
