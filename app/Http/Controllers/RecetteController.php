<?php

namespace App\Http\Controllers;

use App\Recette;
use App\Favorie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Recette $recette)
    {
        return $recette->get();
    }

    public function favorie(Recette $recette, Request $request)
    {
        $recettefav = User::with('recettes')->get();
        
        return response()->json($recettefav);
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recipecreatebyuser(Recette $recette, Request $request)
    {
        $recettefav =  Recette::where('user_id', $request->user()->id)->with('user')->orderBy('created_at', 'desc')->get();
    
        return response()->json($recettefav);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Recette $recette)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'photo' => 'required',
            'type' => 'required',
            'ingredient1' => 'required',
            'ingredient2' => 'required',
            'ingredient3' => 'required',
            'ingredient4' => 'required',
            'ingredient5' => 'required',
            'ingredient6' => 'required',
            'preparation1' => 'required',
            'preparation2' => 'required',
            'preparation3' => 'required',
            'preparation4' => 'required',
            'preparation5' => 'required',
            'cuisson' => 'required',
            'nbpersonne' => 'required',
        ]);
         
        if ($validator->fails()) {
           
            $errors = $validator->errors();

            return $errors->toJson();
        }
        $recette = new Recette;
        $recette->title = $request->title;
        $recette->photo = $request->photo;
        $recette->type = $request->type;
        $recette->ingredient1 = $request->ingredient1;
        $recette->ingredient2 = $request->ingredient2;
        $recette->ingredient3 = $request->ingredient3;
        $recette->ingredient4 = $request->ingredient4;
        $recette->ingredient5 = $request->ingredient5;
        $recette->ingredient6 = $request->ingredient6;
        $recette->preparation1 = $request->preparation1;
        $recette->preparation2 = $request->preparation2;
        $recette->preparation3 = $request->preparation3;
        $recette->preparation4 = $request->preparation4;
        $recette->preparation5 = $request->preparation5;
        $recette->cuisson = $request->cuisson;
        $recette->nbpersonne = $request->nbpersonne;
        $recette->favorie_id = $request->favorie_id;
        $recette->save();
        return $recette;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        //
    }
}
