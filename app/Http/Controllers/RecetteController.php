<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Recette;
use App\Recette_user;
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
        return Recette::with('user')->orderBy('created_at', 'desc')->get();
    }

    public function favorie(User $user, Recette $recette, Request $request, Recette_user $recette_user)
    {
       
        $recettefav = User::with('recettes')->find(Auth::user()->id);
    
    
      return response()->json( $recettefav );

      
    }

    public function favorierecetteadd($id, User $user, Request $request, Recette_user $recette_user)
    {

      
        $iduser = Auth::id();
        $me = User::find($iduser);
        $me->favorie()->attach($id);

        return response()->json(  $me );
    }
    public function favorierecettedelete($id, User $user, Request $request, Recette_user $recette_user)
    {

        $iduser = Auth::id();
        $me = User::find($iduser);
        $me->favorie()->detach($id);
        return $me;
       
    }

    public function favoriebyrecette($id, User $user, Request $request, Recette_user $recette_user)
    {

        

       if(Recette_user::where('recette_id', $id )->where('user_id', '=', Auth::user()->id)->exists() ){
       
        $response = [
            'favorie' =>  true,
         
        ];
        return response($response, 201);
       }else{
        $response = [
            'favorie' =>  false,
         
        ];
        return response($response, 201);
       }
    

    
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
            'materiel' => 'required',
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
        $recette->materiel = $request->materiel;
        $recette->user_id = Auth::user()->id;
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
    public function update($id, Request $request, Recette $recette)
    {
       
        if($request->photo != ''  && $request->title != '' && $request->type != '' &&  $request->ingredient1 != '' &&  $request->ingredient2 != '' && $request->ingredient3 != '' && $request->ingredient4 != '' && $request->ingredient5 != '' && $request->ingredient6 != '' && $request->preparation1 != '' && $request->preparation2 != '' && $request->preparation3 != ''  && $request->preparation4 != ''  && $request->preparation5 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'title'  =>  $recette->title = $request->title, 'photo'  =>  $recette->photo = $request->photo, 'type'  =>  $recette->type = $request->type, 'ingredient1'  =>   $recette->ingredient1 = $request->ingredient1,
            'ingredient2'  =>   $recette->ingredient2 = $request->ingredient2, 'ingredient3'  =>   $recette->ingredient3 = $request->ingredient3, 'ingredient4'  =>   $recette->ingredient4 = $request->ingredient4, 'ingredient5'  =>   $recette->ingredient5 = $request->ingredient5,
            'ingredient6'  =>   $recette->ingredient6 = $request->ingredient6, 'preparation1'  =>    $recette->preparation1 = $request->preparation1, 'preparation2'  =>    $recette->preparation2 = $request->preparation2, 'preparation3'  =>    $recette->preparation3 = $request->preparation3,
            'preparation4'  =>    $recette->preparation4 = $request->preparation4, 'preparation5'  =>    $recette->preparation5 = $request->preparation5,
            ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->title != '' && $request->ingredient1 != '' &&  $request->ingredient2 != '' && $request->ingredient3 != '' && $request->ingredient4 != '' & $request->ingredient5 != '' && $request->ingredient6 != '' && $request->preparation1 != '' && $request->preparation2 != '' && $request->preparation3 != ''  && $request->preparation4 != ''  && $request->preparation5 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'title'  =>  $recette->title = $request->title,  'ingredient1'  =>   $recette->ingredient1 = $request->ingredient1,
            'ingredient2'  =>   $recette->ingredient2 = $request->ingredient2, 'ingredient3'  =>   $recette->ingredient3 = $request->ingredient3, 'ingredient4'  =>   $recette->ingredient4 = $request->ingredient4, 'ingredient5'  =>   $recette->ingredient5 = $request->ingredient5,
            'ingredient6'  =>   $recette->ingredient6 = $request->ingredient6, 'preparation1'  =>    $recette->preparation1 = $request->preparation1, 'preparation2'  =>    $recette->preparation2 = $request->preparation2, 'preparation3'  =>    $recette->preparation3 = $request->preparation3,
            'preparation4'  =>    $recette->preparation4 = $request->preparation4, 'preparation5'  =>    $recette->preparation5 = $request->preparation5,
            ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->title != '' && $request->type != '' && $request->photo != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'title'  =>  $recette->title = $request->title,  'photo'  =>  $recette->photo = $request->photo, 'type'  =>  $recette->type = $request->type ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->title != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'title'  =>  $recette->title = $request->title ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->ingredient1 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'ingredient1'  =>  $recette->ingredient1 = $request->ingredient1 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->ingredient2 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'ingredient2'  =>  $recette->ingredient2 = $request->ingredient2 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->ingredient3 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'ingredient3'  =>  $recette->ingredient3 = $request->ingredient3 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->ingredient4 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'ingredient4'  =>  $recette->ingredient4 = $request->ingredient4 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->ingredient5 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'ingredient5'  =>  $recette->ingredient5 = $request->ingredient5 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->ingredient6 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'ingredient6'  =>  $recette->ingredient6 = $request->ingredient6 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->preparation1 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'preparation1'  =>  $recette->preparation1 = $request->preparation1 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->preparation2 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'preparation2'  =>  $recette->preparation2 = $request->preparation2 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->preparation3 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'preparation3'  =>  $recette->preparation3 = $request->preparation3 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->preparation4 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'preparation4'  =>  $recette->preparation4 = $request->preparation4 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->preparation5 != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'preparation5'  =>  $recette->preparation5 = $request->preparation5 ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
        if($request->materiel != ''){
            $recetteupdate = $recette->where('id', $recette->id = $request->id)->update([  'materiel'  =>  $recette->materiel = $request->materiel ]);
            return response()->json(['recette-update' =>  $recetteupdate]);
        }
     
       
      
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette,  Request $request)
    {
        if(Recette::where('id', '=', $request->id)->exists()){
            Recette::where('id', '=', $request->id)->delete();
          
            return response(null, 200);
           
           }else{
           
            return response(null, 404);
           }
    }
}
