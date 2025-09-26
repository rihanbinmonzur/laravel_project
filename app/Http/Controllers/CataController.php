<?php

namespace App\Http\Controllers;

use App\Models\cata;
use Illuminate\Http\Request;


class CataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=cata::paginate(15);
        return view('category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input=$request->all();
        if($request->hasFile('image_url')){
            $fileName = time().'.'.$request->image_url->extension();  
            $request->image_url->move(public_path('uploads'), $fileName);
            $input['image_url']=$fileName;
        }
        cata::create($request->all());
        return redirect()->route('stud.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cata $cata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cata $stud)
    {
         return view('stud.edit',compact('stud'));
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cata $stud)
    {
        $stud->update($request->all());
        return redirect()->route('stud.index');
    }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(cata $stud)
//     {
//        $stud->delete();
//        return redirect()->route('stud.index');
//     }
// }


  /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       cata::find($id)->delete();
       return redirect()->back()->with('success','successfully deleted');
    }
}
