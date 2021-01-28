<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{

   
    public function __construct()
    {

//         $this->middleware('auth:api');
 
    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locations = Location::latest()->orderBy('locationName')->get();
        return $locations;
        //return response()->json(['locations' => $locations,], 200);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    
    {
        $this->validate($request, [
            'locationName' => 'required',
            'city'         => 'required',
            'country'      => 'required',
            'currency'     => 'required' 
        ]);

        $location = Location::create([
            'locationName'  => request('locationName'),
            'city'          => request('city'),
            'state'         => request('state'),
            'country'       => request('country'),
            'currency'      => request('currency'),
            'postalCode'    => request('postalCode'),
            'GPdatabase'    => request('GPdatabase'),
            'VAT'           => request('VAT'),
            'VATRate'       => request('VATRate')
        ]);

        return response()->json([
            'location'  => $location,
            'message'   => 'Success'
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::where(['id' => $id])->first();
        return $location;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {

        $this->validate($request, [
            'locationName' => 'required',
            'city'         => 'required',
            'country'      => 'required',
            'currency'     => 'required' 
        ]);

        $location->locationName  = request('locationName');
        $location->address       = request('address');
        $location->city          = request('city');
        $location->state         = request('state');
        $location->country       = request('country');
        $location->currency      = request('currency');
        $location->postalCode    = request('GPdatabase');
        $location->VAT           = request('VAT');
        $location->VATRate       = request('VATRate');

        $location->save();

        return response()->json([
            'message' => 'Location updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json([
            'message' => 'Location Deleteed Successfully!'
        ]);
    }
}

