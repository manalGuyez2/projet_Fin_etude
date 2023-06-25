<?php

namespace App\Http\Controllers;
use App\models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;
class AdminController extends Controller
{
    public function getLoginAdmin(){
        return view("Admin.loginAdmin");
    }

    public function postLoginAdmin(Request $request){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:2'
    ]);
     //echo 'value posted';
         $admin = Admin::where('email','=', $request->email)->first();
       if($admin){
        if($admin && Hash::check($request->password, $admin->password)){
        
            $request->session()->put('adminLoginId', $admin->id);
            return redirect('admin');
        }else{
            return back()->with('fail','le mot de passe ne correspond pas.');
        }

    } else{
        return back()->with('fail',"cet email n'est pas enregistré");
        }
         
    }

    
    public function admin(){
        $admin = array();
       if(Session::has('adminLoginId')){
        $admin = Admin::where('id','=', Session::get('adminLoginId'))->first();
       }

                
        return view('/Admin/adminAccueil', compact('admin'))->with('success'," Bienvenue a votre espace etudiant...!");

    }

    public function logoutAdmin(){
        if(Session::has('adminLoginId'))
        {
            Session::pull('adminLoginId');
            return redirect('/');
        }
        else
        return redirect('/');
    }
}
