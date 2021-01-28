<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialComponent;


class MaterialComponentController extends Controller
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
        $materialComponents = MaterialComponent::all();
        $materialCost = 109;
        dd($materialCost);
        return $materialComponents;
    }

/*        
        $materialComponents = MaterialComponent::join('materials', 'material_assemblies.component_id', 'materials.id' )
        ->select(
            'material_assemblies.material_id',
            'material_assemblies.component_id',
            'material_assemblies.quantity',
            'materials.specGrav',
            DB::raw('(material_assemblies.quantity / materials.specGrav) as PartsByVolume')
            )->get();
    return response()->json(['materialAssembly' => $materialAssembly,], 200);
*/    
    

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
        //
        $materialComponent = MaterialComponent::create([
            'material_id' => request('material_id'),
            'component_id'  => request('component_id'),
            'quantity' => request('quantity'),
        ]);
            
        return response()->json([
            'material Component'    => $materialComponent,
            'message' => 'Success'
        ], 200);////
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $materialCost = MaterialLocation::where(['material_id' => $id])->get();        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response$
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
    public function destroy(MaterialComponent $materialComponent)
    {
        $materialComponent->delete();
        return response()->json([
            'message' => 'Material Component deleted successfully!'
        ], 200);
    }
}
