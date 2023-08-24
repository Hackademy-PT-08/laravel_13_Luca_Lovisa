<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StorePictureRequest;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures=Picture::all();

        return view('pictures.index',[
            'pictures'=>$pictures
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view ('pictures.create',[
            'categories'=> $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePictureRequest $request)
    {       
        $imageId=uniqid();
        $imageName='immagine-quadro-'.$imageId.'.'.$request->file('immagine')->extension();
        $category_picture = $request->categorie;
        $picture= new Picture;

        $picture->title=$request->titolo;
        $picture->description=$request->descrizione;
        $picture->price=$request->prezzo;
        $picture->image=$imageName;
        $picture->image_id=$imageId;
        $picture->user_id=auth()->user()->id;



        $image=$request->file('immagine')->storeAs('public',$imageName);

        $picture->save();

        $current_picture = Picture::find($picture->id);

        foreach($category_picture as $category){
            $current_picture->categories()->attach($category);
        }

        return redirect()->route('pictures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $picture = Picture::find($id);

        return view ('pictures.edit',[
            'picture' => $picture
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $picture = Picture::find($id);

        $picture->title=$request->titolo;
        $picture->description=$request->descrizione;
        $picture->price=$request->prezzo;

        if($request->file('immagine')){

            
            $imageId=$picture->image_id;

            $imageName='immagine-quadro-'.$imageId.'.'.$request->file('immagine')->extension();
            
            $image=$request->file('immagine')->storeAs('public',$imageName);
        }

        $picture->save();

        return redirect()->route('pictures.index');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);

        $picture->delete();

        return redirect()->route('pictures.index');

    }
}
