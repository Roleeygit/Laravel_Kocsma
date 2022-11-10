<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kocsma;
use App\Models\Type;

class KocsmaController extends Controller
{

    public function ujital()
    {
        return view("uj_ital");
    }

    public function veglegesitital(REQUEST $request)
    {
        $type = $request->type;
        $types = Type::where("id",$type)->get();
        $type_id = 0;
        foreach($types as $type)
            $type_id = $type->id;


        $kocsma = new Kocsma;
        $kocsma->nev=$request->nev;
        $kocsma->ar=$request->ar;
        $kocsma->type_id= $type_id;
        $kocsma->save();

        $request->session()->flash("success","The writing was successful");
        return redirect("/uj-ital");
    }

    public function kocsmaadat()
    {
        $kocsmas = Kocsma::with("type")->get();
        foreach ($kocsmas as $kocsma)
        {
            return view("list_kocsma", [

                "kocsmas" => $kocsmas
             ]);

        }
    }

    public function ujkocsma(Request $request){
        $nev = $request->nev;

        $kocsmas = Kocsma::with("type")->where("nev",$nev)->first();
        return view("/frissit_kocsma",[
            "kocsma"=> $kocsmas
        ]);
    }

    public function frissitkocsma(Request $request)
    {

        $type = $request->type;
        $types = Type::where("nev",$type)->get();
        $type_id = 0;
        foreach($types as $type)
            $type_id = $type->id;


        $kocsma = Kocsma::where("nev",$request->nev)->first();

        $kocsma -> nev = $request->nev;
        $kocsma -> ar = $request->ar;
        $kocsma -> type_id = $type_id;

        $kocsma->save();
        return redirect("/");
    }

    public function torolkocsma(Request $request)
    {

        $kocsma = Kocsma::where("nev",$request->nev)->first();
        $id = $kocsma->id;
        $kocsma->delete($id);
        return redirect("/");
    }




}
