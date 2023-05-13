<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;
use  Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        $data = Student::get();
        return view('Admin.ListEtud', compact('data'));

    }

    public function ajouterEtd(){
        //$data = Student::get();
        return view('Admin.ajouterEtud');
       
    }
    public function saveEtd(Request $request){
        //$data = Student::get();
        //return view('Admin.ajouterEtudiant');
        //dd($request->all());
        $request->validate([
            'apoge'=>'required',
            'cne'=>'required',
            'nom'=>'required',
            'naissance'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $apoge = $request->apoge;
        $cne = $request->cne;
        $nom = $request->nom;
        $naissance = $request->naissance;
        $email = $request->email;
        $password = $request->password;

        $stu = new Student();
        $stu->apoge = $apoge;
        $stu->cne = $cne;
        $stu->nom = $nom;
        $stu->naissance = $naissance;
        $stu->email = $email;
        $stu->password = $password;
        $stu->save();
        return redirect()->back()->with('success'," L'etudiant est ajouté avec succès");
       
    }

    public function modEtd($id){
        $data = Student::where('id','=',$id)->first();
        return view('Admin.editerEtudiant', compact('data'));

    }

    public function enrgEtd(Request $request, $id){
      


        $student = Student::find($id);
        $student->apoge = $request->input('apoge');
        $student->cne = $request->input('cne');
        $student->nom = $request->input('nom');
        $student->naissance = $request->input('naissance');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->update();
        return redirect()->back()->with('success','Student Updated Successfully');
    }



      
    public function suppEtd($id){

        Student::where('id','=',$id)->delete();
        return redirect()->back()->with('success'," L'etudiant est supprimer avec succès");
    }


    //--------login--------


    public function loginetd(){
        return view("/etud");
    }

    public function loginEtud(Request $request){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:2'
    ]);
     //echo 'value posted';
         $etud = Student::where('email','=', $request->email)->first();
    if($etud){
        if($etud && $request->password == $etud->password){
            $request->session()->put('etud', $etud);
            return redirect('dashboard');
        }else{
            return back()->with('fail','le mot de passe ne correspond pas.');
        }

    } else{
        return back()->with('fail',"cet email n'est pas enregistré");
        }
         
    }
    public function dashboard(){
        return view('/dashboard');
    }
}




