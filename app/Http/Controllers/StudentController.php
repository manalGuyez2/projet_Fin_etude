<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\models\Student;
use App\Providers\RouteServiceProvider;

use  Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;
use \Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\View;


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
        $password = $password = Hash::make($request->password);

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

   public function enrgEtd(Request $request){
         $request->validate([
            'apoge'=>'required',
            'cne'=>'required',
            'nom'=>'required',
            'naissance'=>'required',
            'email'=>'required',
            'password'=>'required',
         ]);
         $id=$request->id;
         $apoge = $request->apoge;
         $cne = $request->cne;
         $nom = $request->nom;
         $naissance = $request->naissance;
         $email = $request->email;
         $password = $password = Hash::make($request->password);
         
         Student::where('id','=',$id)->update([
           'apoge'=> $apoge, 
           'cne'=>$cne, 
           'nom'=>$nom, 
           'naissance'=>$naissance,
           'email'=>$email, 
           'password'=>$password 
         ]); 
         
         return redirect()->back()->with('success'," L'etudiant est modifier avec succès"); 
   }



      
    public function suppEtd(Request $request){

        Student::where('id','=',$request->etudiant_delete_id)->delete();
        return redirect()->back()->with('success'," L'etudiant est supprimer avec succès");
    }


    //--------login--------


    public function getLogin(){
        return view("/etud");
    }

    public function postLogin(Request $request){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:2'
    ]);
     //echo 'value posted';
         $etud = Student::where('email','=', $request->email)->first();
       if($etud){
        if($etud && Hash::check($request->password , $etud->password)){
            $request->session()->put('LoginId', $etud->id);
            Session::put('nom', $etud->nom);
            Session::put('email', $etud->email);
            Session::put('password', $etud->password);
            Session::put('id', $etud->id);
            return redirect('dashboard');
        }else{
            return back()->with('fail','le mot de passe ne correspond pas.');
        }

    } else{
        return back()->with('fail',"cet email n'est pas enregistré");
        }
         
    }

    
    public function dashboard(){
        $etud = array();
       if(Session::has('LoginId')){
        $etud = Student::where('id','=', Session::get('LoginId'))->first();
       }

                
        return view('/index', compact('etud'))->with('success'," Bienvenue a votre espace etudiant...!");

    }
    public function __construct()
    {
      //its just a dummy data object.
      $etud = Student::all();
  
      // Sharing is caring
      View::share('id', $etud);
    }

    public function logout(Request $request){
        if(Session::has('LoginId'))
        {
            $request->session()->forget('nom');
            $request->session()->forget('email');
            $request->session()->forget('password');
            $request->session()->forget('id');
            Session::pull('LoginId');
            return redirect('/');
        }
        else
        return redirect('/');
    } 


                
       
             /*----------------change password-------------*/
    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }

    public function updatePassword(Request $request){
       
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

         #Match The Old Password
        if(!Hash::check($request->old_password, Session::get('password'))){
    return back()->with("error", "Mot de passw actuel ne correspond pas!");
        }


     #Update the new Password
     Student::whereId(Session::get('id'))->update(['password' => Hash::make($request->new_password)]);

       return back()->with("status", "Le mot de passe a été changé avec succès!");
}
    
   
}




