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

    public function frissitKocsma(Request $request){

        $type = $request->type;
        $types = Type::where("nev",$type)->get();
        $type_id = 0;
        foreach($types as $type)
            $type_id = $type->id;


        $student = Student::where("name",$request->name)->first();

        $student ->name = $request->name;
        $student-> email = $request->email;
        $student-> course_id = $course_id;

        $student->save();
        return redirect("/");
    }

    public function destroy(Request $request){

        $student = Student::where("name",$request->name)->first();
        $id = $student->id;
        $student->delete($id);
        return redirect("/");
    }




}
