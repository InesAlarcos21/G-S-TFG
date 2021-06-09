<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage_outlet'); 

        $outletQuery = Outlet::query(); 
        $outletQuery->where('name', 'like', '%'.request('q').'%'); 
        $outlets = $outletQuery->simplepaginate(25); 
        return view('outlets.index', compact('outlets')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', new Outlet); 
        return view('outlets.create'); 
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
        $this->authorize('create', new Outlet); 

        $newOutlet = $request->validate([
            'name' => 'required|max:60', 
            'address' =>'nullable|max:255', 
            'latitude' =>'nullable|required_with:longitude|max:15', 
            'longitude' =>'nullable|required_with:latitude|max:15',
        ]); 

        $newOutlet['crerator_id'] = auth()->id(); 
        $outlet = Outlet::create($newOutlet); 
        return redirect()->route('outlets.show', $outlet); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        return view('outlets.show', compact('outlet')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        $this->authorize('update', $outlet); 
        return view('outlets.edit', compact('outlet')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        $this->authorize('update', $outlet); 

        $outletData = $request->validate([
            'name' => 'required|max:60', 
            'address' =>'nullable|max:255', 
            'latitude' =>'nullable|required_with:longitude|max:15', 
            'longitude' =>'nullable|required_with:latitude|max:15',
        ]); 
        $outlet->update($outletData); 
        return redirect()->route('outlets.show', $outlet); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Outlet $outlet)
    {
        $this->authorize('delete', $outlet); 

        $request->validate(['outlet_id' => 'required']); 

        if($request->get('outlet_id' == $outlet->id && $outlet->delete())){
            return redirect()->route('outlets.index'); 
        }
        return back(); 
    }
}
