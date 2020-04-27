<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
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


          public function dharura()
    {
        //

        return view('front.products.dharura');
    }



    // Dharura Functions

       public function dharuraSilver()
    {
        //

        return view('front.products.dharura_silver');
    }


           public function dharuraBronze()
    {
        //

        return view('front.products.dharura_bronze');
    }


           public function dharuraPlatinum()
    {
        //

        return view('front.products.dharura_platinum');
    }


           public function dharuraGold()
    {
        //

        return view('front.products.dharura_gold');
    }


    // Msafiri Functions

     public function msafiri()
    {
        //

        return view('front.products.msafiri');
    }


         public function msafiriPsv()
    {
        //

        return view('front.products.msafiri_psv');
    }


         public function msafiriMotorist()
    {
        //

        return view('front.products.msafiri_moto');
    }


    // Fanaka Functions

     public function fanaka()
    {
        //

        return view('front.products.fanaka');
    }

// Kikwetu Functions
         public function kikwetu()
    {
        //

        return view('front.products.kikwetu');
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
