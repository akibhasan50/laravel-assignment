<?php

namespace App\Http\Controllers;

use App\Models\Recipie;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RecipieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $recipies =Recipie::latest()->paginate(5);
        return view('recipies.index',compact('recipies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('recipies.addrecipies');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'title'=>'required',
            'instructions'=>'required',
            'ingredients'=>'required',
            'time'=>'required',
            'servings'=>'required',
            'nutrition'=>'required',
            'type'=>'required|in:Non-Veg,Veg|exists:recipies,type',
        ]);
       $addRecipie = $request->all();
       Recipie::create( $addRecipie);
       Alert::toast('New Recipie added Successfull! ','success');
        return redirect()->route('recipie.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipie  $recipie
     * @return \Illuminate\Http\Response
     */
    public function show(Recipie $recipie)
    {
        
        return view('recipies.showrecipie',compact('recipie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipie  $recipie
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipie $recipie)
    {
        //$recipie = Recipie::findOrFail($id);
        

        return view('recipies.editrecipies',compact('recipie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipie  $recipie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipie $recipie)
    {
    //$recipie = Recipie::findOrFail($id);
    $request->validate([
        'title'=>'required',
        'instructions'=>'required',
        'ingredients'=>'required',
        'time'=>'required',
        'servings'=>'required',
        'nutrition'=>'required',
        'type'=>'required|exists:recipies,type',
    ]);
        
        $updateRecipie = $request->all();
        $recipie->update($updateRecipie);
       Alert::toast(' Recipie Updated Successfull! ','success');
        return redirect()->route('recipie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipie  $recipie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipie $recipie)
    {
        $recipie->delete();
        Alert::toast(' Recipie Deleted Successfull! ','success');
         return redirect()->back();
    }
    public function search(Request $request)
    {
        $name = $request->name;

        $recipies = new Recipie;
        $results = Recipie::where('title','like',"%$name%")
        ->orWhere('type','like',"%$name%")
        ->get();
        return view('recipies.result',compact('results'));
    }
}
