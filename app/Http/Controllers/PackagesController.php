<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


        // Packages Functions 

       public function emergency_medical()
    {
        //

        return view('front.packages.emergency_medical');
    }


       public function emergency_road()
    {
        //

        return view('front.packages.emergency_road');
    }


       public function emergency_fire()
    {
        //

        return view('front.packages.emergency_fire');
    }


// Fire Packages

          public function fire_corporate()
    {
        //

        return view('front.packages.fire.fire_corporate');
    }

              public function fire_hotel()
    {
        //

        return view('front.packages.fire.fire_hotel');
    }


              public function fire_private_residence()
    {
        //

        return view('front.packages.fire.fire_private_residence');
    }

              public function fire_org_estates()
    {
        //

        return view('front.packages.fire.fire_org_estates');
    }


              public function fire_institution()
    {
        //

        return view('front.packages.fire.fire_institution');
    }


    // Medical Packages

              public function medical_corporate()
    {
        //

        return view('front.packages.medical.medical_corporate');
    }

              public function medical_individual()
    {
        //

        return view('front.packages.medical.medical_individual');
    }

                public function medical_family()
    {
        //

        return view('front.packages.medical.medical_family');
    }


              public function medical_private_residence()
    {
        //

        return view('front.packages.medical.medical_private_residence');
    }

              public function medical_org_estates()
    {
        //

        return view('front.packages.medical.medical_org_estates');
    }

      public function medical_institution()
    {
        //

        return view('front.packages.medical.medical_institution');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
