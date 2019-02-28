<?php

namespace Modules\Presse\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Presse\Entities\Presse;
use Modules\Presse\Http\Requests\PresseValidation;
use ImageIntervention;
use Storage;

class PresseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee=Presse::all();
        // dd($donnee);
        return view('presse::articles/index', compact('donnee'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {   
        $donnee=Presse::all();
        return view('presse::articles.create',  compact('donnee'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(PresseValidation $request)
    {
        $img=$request->file('image');
        $renom=time().$img->hashName();
        $img->store('/public/images/original');
        $resized=ImageIntervention::make($img)->resize(100,72);
        $resized->save();
        Storage::put('/public/images/thumbnails/'.$renom, $resized);
        $presse= new Presse;
        $presse->date=$request->date;
        $presse->media=$request->media;
        $presse->lien=$request->lien;
        $presse->titre=$request->titre;
        $presse->image=$renom;
        $presse->save();
        return redirect('presse/admin');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('presse::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $modif=Presse::find($id);
        return view('presse::articles/edit', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(PresseValidation $request, $id)
    {
        $modif=Presse::find($id);
        if ($request->image== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->image);
            Storage::delete('public/images/thumbnails/'.$modif->image);
            $img=$request->image;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(128,128);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $modif->image=$renom;
        }
        $modif->date=$request->date;
        $modif->media=$request->media;
        $modif->lien=$request->lien;
        $modif->titre=$request->titre;
        $modif->save();
        return redirect('presse/admin');

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=Presse::find($id);
        Storage::delete($del->image);
        $del->delete();
        return redirect('presse/admin');

    }
}
