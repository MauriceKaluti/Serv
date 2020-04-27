<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Contact;
use App\BookEvent;
use App\EventImage;
use App\Enquiry;
use App\Dharura;
use App\MsafiriPsv;
use App\MsafiriMoto;
use App\MedicalIndividual;
use App\MedicalFamily;
use App\MedicalCorporate;
use App\MedicalInstitution;
use App\MedicalResidence;
use App\MedicalEstate;
use App\FirePackage;
use App\Fanaka;
use App\Kikwetu;
use App\RescueFirst;
use App\RescueFire;
use App\RescueMedical;
use App\RescueRoad;
use App\AirQuote;
use App\EmergencyRoad;
use App\BlogPost; 
use App\BlogCategory; 
use App\BlogSubscriber; 



use Image;

use DB;

use Session;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $showevents = Event::get();   

        // $showevents = DB::table('events')->latest()->first();  
        
        $showevents = Event::orderBy('id','DESC')->paginate(1);

        // $showevents = DB::table('events')->orderBy('id', 'DESC')->paginate(1); 
         

        // var_dump($idd); die();      


        return view('front.home', compact('showevents'));
    }
 


       public function blogShow()
    {
        //
 
        $blogposts = BlogPost::orderBy('id','DESC')->paginate(3);

          // $categories = BlogCategory::orderBy->RAND()->get();

        $categories = BlogCategory::orderBy(DB::raw('RAND()'))->take(5)->get();

         return view( 'front.blog', compact( [ 'categories', 'blogposts'] ));

    }


        public function blogShowPost( $slug = null ) {

        $post = BlogPost::where( 'slug', $slug )->first();

        $categories = BlogCategory::orderBy(DB::raw('RAND()'))->take(5)->get();
           


         // var_dump($event); die();
 
        // var_dump($showPartnerLogos); die();      

        return view('front.single_post', compact('post', 'categories'));
    }


        public function blogSearch(Request $request){

        $request->validate([

            'query' => 'required|min:3',

        ]);

        $categories = BlogCategory::orderBy(DB::raw('RAND()'))->take(5)->get();
         


        $query = $request->input('query');

        $blogposts = BlogPost::where('title', 'LIKE', "%{$query}%")
                                ->orWhere('details', 'like', "%{$query}%")
                                ->orWhere('slug', 'like', "%{$query}%")
                                ->paginate(50);
                                

        // echo "<pre>"; print_r($blogposts); die;

        // return view('front.search-results')->with('blogposts','categories');


         return view( 'front.search-results', compact( [ 'categories', 'blogposts', $blogposts] ));


    }

    // blog category bosts
    public function blogCategory( $id = null ) {
        $catPosts = array();
        $catP = array();

        $categories = BlogCategory::orderBy(DB::raw('RAND()'))->take(5)->get();
         

        if($id != ""){
            // $catPosts = BlogPost::where('category_id', '=', $id)->get();
            $catPosts = BlogPost::where('category_id', '=', $id)->paginate(5);
            $catP = BlogCategory::where('id', '=', $id)->first();
        }else{
            $catPosts = BlogPost::all();
        }

        return view( 'front.blog_category', compact( 'catPosts', 'catP', 'categories' ) );
    }


    

    public function eventPage( $id = null ) {

        $event = Event::where( 'id', $id )->first();

         // var_dump($event); die();

        $showPartnerLogos = EventImage::where('event_id',$id)->get();
        $showPartnerLogos = json_decode(json_encode($showPartnerLogos));

        // var_dump($showPartnerLogos); die();

       

        return view('front.single_event', compact('event','showPartnerLogos'));
    }

        
        // Backend Functions

        public function bookEvent($id, Request $request) {       

        $book_events = BookEvent::create( $request->all() );

        // $book_events  = new BookEvent;        
        // $book_events->event_id = $id;
        // $book_events->event_entity = $request->event_entity;
        // $book_events->event_title = $request->event_title;
        // $book_events->applicant_name = $request->applicant_name;
        // $book_events->applicant_email = $request->applicant_email;
        // $book_events->applicant_entity = $request->applicant_entity;
        // $book_events->applicant_department = $request->applicant_department;
        // $book_events->applicant_position = $request->applicant_position;
        // $book_events->save();

        // var_dump($book_events); die();   

        return redirect()->back()->with('ticketsuccess', 'Event Ticket Booked Successfully'); 

        }

        public function storeMessage(Request $request ) {       

        $contacts = Contact::create( $request->all() );  

        return redirect()->back()->with('messagesuccess', 'Message Sent Successfully!'); 

        // Session::flash('success', 'Message Sent Successfully!');

        // return redirect()->back();

        }


        public function storeSubscriber(Request $request ) {       

        $subscribers = BlogSubscriber::create( $request->all() );

        return redirect()->back()->with('subsuccess', 'Subscription Done Successfully!'); 


        }


        public function storeEnquiry(Request $request ) {       

        $enquiry = Enquiry::create( $request->all() );  

        return redirect()->back()->with('enquiresuccess', 'Enquiry Sent Successfully!'); 

        }

          public function storeAirQuote(Request $request ) {       

        $quote = AirQuote::create( $request->all() );  

        return redirect()->back()->with('quotesuccess', 'Quote Requested Successfully! Wait shortly.'); 

        }


        

        // Fanaka

       public function storeFanaka(Request $request ) {       


        if ($request->isMethod('post')) {
            
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $fanaka = new Fanaka;
            $fanaka->user_id = $data['user_id'];
            $fanaka->user_name = $data['user_name'];
            $fanaka->email = $data['email'];
            $fanaka->phone = $data['phone'];
            $fanaka->fanaka_price = $data['fanaka_price'];
            $fanaka->vehicle_reg = $data['vehicle_reg'];
            $townS = $request->input('town');
            $town = implode(',', $townS);  
            $fanaka->town = $town;
            $modelS = $request->input('vehicle_model');
            $model = implode(',', $modelS); 
            $fanaka->vehicle_model = $model;
            $fanaka->save();

            return redirect()->back()->with('fanakasuccess', ' Fanaka Subscription Successfull!'); 
            
        }

 

        }


                // Kikwetu

       public function storeKikwetu(Request $request ) {       


        if ($request->isMethod('post')) {
            
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $kikwetu = new Kikwetu;
            $kikwetu->user_id = $data['user_id'];
            $kikwetu->principal_name = $data['principal_name'];
            $kikwetu->email = $data['email'];
            $kikwetu->phone = $data['phone'];
            // $kikwetu->phone_alt = $data['phone_alt'];
            $kikwetu->street_name = $data['street_name'];
            $kikwetu->house_no = $data['house_no'];
            $kikwetu->kikwetu_price = $data['kikwetu_price'];

            $townS = $request->input('town');
            $town = implode(',', $townS); 

            $kikwetu->town = $town;

            // $blood_grpS = $request->input('blood_grp');
            // $blood_grp = implode(',', $blood_grpS); 

            // $kikwetu->blood_grp = $blood_grp;

            $no_dependantS = $request->input('no_dependants');
            $no_dependant = implode(',', $no_dependantS); 

            $kikwetu->no_dependants = $no_dependant;           

            $kikwetu->save();

            return redirect()->back()->with('kikwetusuccess', 'Kikwetu Subscription Successfull!'); 
            
        }

 

        }

           // Dharura

       public function storeDharura(Request $request ) {       

        $dharura = Dharura::create( $request->all() );  

        return redirect()->back()->with('dharurasuccess', 'Dharura Subscription Successfull!'); 

        }
        

        // Msafiri

       public function storeMsafiriPSV(Request $request ) {       

        $msafiriPSV = MsafiriPsv::create( $request->all() );  

        return redirect()->back()->with('msafirisuccesspsv', 'PSV Subscription Successfull!'); 

        }

          public function storeMsafiriMoto(Request $request ) {       

        $msafiriMoto = MsafiriMoto::create( $request->all() );  

        return redirect()->back()->with('msafirisuccessmoto', 'Private Motorist Subscription Successfull!'); 

        }


        // Medical Packages

       public function storeMedicalInstitution(Request $request ) {       

        $medInst = MedicalInstitution::create( $request->all() );  

        return redirect()->back()->with('instmedicalsuccess', 'Institution Subscription Successfull!'); 

        }

          public function storeMedicalCorporate(Request $request ) {       

        $medCorp = MedicalCorporate::create( $request->all() );  

        return redirect()->back()->with('corpmedicalsuccess', 'Corporate Subscription Successfull!'); 

        }

          public function storeMedicalEstate(Request $request ) {       

        $medEst = MedicalEstate::create( $request->all() );  

        return redirect()->back()->with('estmedicalsuccess', 'Estate Subscription Successfull!'); 

        }


          public function storeMedicalResidence(Request $request ) {       

        $medRes = MedicalResidence::create( $request->all() );  

        return redirect()->back()->with('resmedicalsuccess', 'Residence Subscription Successfull!'); 

        }

          public function storeMedicalIndividual(Request $request ) {       

        $medInd = MedicalIndividual::create( $request->all() );  

        return redirect()->back()->with('indmedicalsuccess', 'Individual Subscription Successfull!'); 

        }

          public function storeMedicalFamily(Request $request ) {       

        $medFam = MedicalFamily::create( $request->all() );  

        return redirect()->back()->with('fam_medicalsuccess', 'Family Subscription Successfull!'); 

        }


        // Packages - Fire

        public function storeFirePackage(Request $request ) {       

        $firePckg = FirePackage::create( $request->all() );  

        return redirect()->back()->with('firesuccess', 'Emergency Fire Membership Subscription Successfull!'); 

        }  

             // Packages - Fire

        public function storeRoadPackage(Request $request ) {       

        $roadPckg = EmergencyRoad::create( $request->all() );  

        return redirect()->back()->with('roadsuccess', 'Emergency Road Membership Subscription Successfull!'); 

        }



    // Rescue Teams

            public function storeFirstRescue(Request $request ) {       

        $firstResc = RescueFirst::create( $request->all() );  



                if ($request->hasFile( 'vehicle_photo' ) ) {
            $image_tmp =$request->vehicle_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 150, 150 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $firstResc['vehicle_photo'] = $filename;
            }

        } 


        if ($request->hasFile( 'passport_photo' ) ) {
            $image_tmp =$request->passport_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 100, 100 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $firstResc['passport_photo'] = $filename;
            }

        } 
          
          $firstResc->save();

        return redirect()->back()->with('firstteamsuccess', 'First Responder Team Application Successfull!'); 

        }  




            public function storeFireRescue(Request $request ) {       

        $fireResc = RescueFire::create( $request->all() );  



                if ($request->hasFile( 'vehicle_photo' ) ) {
            $image_tmp =$request->vehicle_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 150, 150 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $fireResc['vehicle_photo'] = $filename;
            }

        } 


        if ($request->hasFile( 'passport_photo' ) ) {
            $image_tmp =$request->passport_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 100, 100 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $fireResc['passport_photo'] = $filename;
            }

        } 
          
          $fireResc->save();

        return redirect()->back()->with('fireteamsuccess', 'Fire Team Application Successfull!'); 

        }



            public function storeMedicalRescue(Request $request ) {       

        $medResc = RescueMedical::create( $request->all() );

                if ($request->hasFile( 'vehicle_photo' ) ) {
            $image_tmp =$request->vehicle_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 150, 150 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $medResc['vehicle_photo'] = $filename;
            }

        } 


        if ($request->hasFile( 'passport_photo' ) ) {
            $image_tmp =$request->passport_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 100, 100 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $medResc['passport_photo'] = $filename;
            }

        } 
          
          $medResc->save();

        return redirect()->back()->with('medicalteamsuccess', 'Medical Team Application Successfull!'); 

        }


            public function storeRoadRescue(Request $request ) {       

        $medResc = RescueRoad::create( $request->all() );

                if ($request->hasFile( 'vehicle_photo' ) ) {
            $image_tmp =$request->vehicle_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 150, 150 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $medResc['vehicle_photo'] = $filename;
            }

        } 


        if ($request->hasFile( 'passport_photo' ) ) {
            $image_tmp =$request->passport_photo;        
            if ( $image_tmp->isValid() ) {
                $extension         = $image_tmp->getClientOriginalExtension();
                $filename          = rand( 111, 9999 ) . '.' . $extension;
                $large_image_path  = 'images/teamimages/large/' . $filename;
                $medium_image_path = 'images/teamimages/medium/' . $filename;            

                // Resize Imgs
                Image::make( $image_tmp )->save( $large_image_path );
                Image::make( $image_tmp )->resize( 100, 100 )->save( $medium_image_path );
        
                // Storing Image
                // $product->image = $filename;
                $medResc['passport_photo'] = $filename;
            }

        } 
          
          $medResc->save();

        return redirect()->back()->with('roadteamsuccess', 'Road Assistance Team Application Successfull!'); 

        }

  


// Views Only

       public function emergency_medical_team()
    {
        //
        return view('front.rescue_teams.emergency_medical_team');
    }



       public function emergency_road_team()
    {
        //

         return view('front.rescue_teams.emergency_road_team');
    }


       public function emergency_fire_team()
    {
        //

         return view('front.rescue_teams.emergency_fire_team');
    }


       public function emergency_firstresponder_team()
    {
        //

         return view('front.rescue_teams.emergency_firstresponder_team');
    }



       public function about()
    {
        //

         return view('front.about');
    }

          public function gallery()
    {
        //

         return view('front.gallery');
    }

          public function contact()
    {
        //

         return view('front.contact');
    }


             public function media_publication()
    {
        //

         return view('front.media_publication');
    }

          public function events()
    {
        //
        $events = Event::orderBy('id','DESC')->get();
        // var_dump($events); die();

        return view('front.events', compact('events'));
    }

 
}
