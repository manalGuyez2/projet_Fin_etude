<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class ProfController extends Controller
{
    public function indexPrf(){
        
        $dataPrf = Prof::get();
        return view('Admin.prof.ListProf', compact('dataPrf'));

    }

    public function ajouterPrf(){
        
        return view('Admin.prof.ajouterProf');
       
    }
    public function savePrf(Request $request){
        //$dataPrf = Prof::get();
        //return view('Admin.ajouterEtudiant');
        //dd($request->all());
        $request->validate([
            
            'cne'=>'required',
            'nom'=>'required',
            'email'=>'required',
            'naissance'=>'required',
            'nameModule'=>'required',
            'etat'=>'required',
           
            'password'=>'required',

        ]);
        
        $cne = $request->cne;
        $nom = $request->nom;
        $email = $request->email;
        $naissance = $request->naissance;
        $nameModule = $request->nameModule;
        $etat = $request->etat;
      
        $password = $password = Hash::make($request->password);

        $prf = new Prof();
       
        $prf->cne = $cne;
        $prf->nom = $nom;
        $prf->email = $email;
        $prf->naissance = $naissance;
        $prf->nameModule = $nameModule;
        $prf->etat = $etat;
       
        $prf->password = $password;
        $prf->save();
        return redirect()->back()->with('success'," L'enseignat est ajouté avec succès");
       
    }

    public function modPrf($id){
        $dataPrf = Prof::where('id','=',$id)->first();
        return view('Admin.prof.editerProf', compact('dataPrf'));

    }

   public function enrgPrf(Request $request){
         $request->validate([
            'cne'=>'required',
            'nom'=>'required',
            'email'=>'required',
            'naissance'=>'required',
            'nameModule'=>'required',
            'etat'=>'required',
            
            'password'=>'required',
         ]);
         $id=$request->id;
         $cne = $request->cne;
         $nom = $request->nom;
         $email = $request->email;
         $naissance = $request->naissance;
         $nameModule = $request->nameModule;
        
         $etat = $request->etat;
         
         $password = Hash::make($request->password);
         
         Prof::where('id','=',$id)->update([
           
           'cne'=>$cne, 
           'nom'=>$nom, 
           'email'=>$email,
           'naissance'=>$naissance,
           'nameModule'=>$nameModule,
           'etat'=>$etat,
          
           'password'=>$password 
         ]); 
         return redirect()->back()->with('success'," L'enseignant est modifier avec succès"); 
   }



      
    public function suppPrf(Request $request){

        Prof::where('id','=',$request->prof_delete_id)->delete();
        return redirect()->back()->with('success'," L'enseignants est supprimer avec succès");
    }


    //--------login--------


    public function getLoginProf(){
        return view("/enseignant");
    }

    public function postLoginProf(Request $request){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:2'
    ]);
     //echo 'value posted';
         $profData = Prof::where('email','=', $request->email)->first();
    if($profData){
        if($profData && Hash::check($request->password , $profData->password)){
            $request->session()->put('prof', $profData->id);
            Session::put('nom', $profData->nom);
            Session::put('email', $profData->email);
            Session::put('password', $profData->password);
            Session::put('nameModule', $profData->nameModule);
            Session::put('id', $profData->id);
            return redirect('DashboardProf');
        }else{
            return back()->with('fail','le mot de passe ne correspond pas.');
        }

    } else{
        return back()->with('fail',"cet email n'est pas enregistré");
        }
         
    }
    public function DashboardProf(){
        $prof = array();
       if(Session::has('prof')){
        $prof = Prof::where('id','=', Session::get('prof'))->first();
       }

        return view('/index', compact('prof'));
    }
    public function test(){
        $prof = array();
       if(Session::has('prof')){
        $prof = Prof::where('id','=', Session::get('prof'))->first();
       }

        return view('/index', compact('prof'));
    }
   

    public function logoutProf(Request $request){
        if(Session::has('prof'))
        {
            $request->session()->forget('nom');
            $request->session()->forget('email');
            $request->session()->forget('password');
            $request->session()->forget('nameModule');
            $request->session()->forget('id');
            Session::pull('prof');
            return redirect('/');
        }
        else
        return redirect('/index');
    } 



         /*----------------change password-------------*/
         public function showChangePasswordFormProf(){
            return view('auth.changepasswordProf');
        }
    
        public function updatePasswordProf(Request $request){
           
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
         Prof::whereId(Session::get('id'))->update([
        'password' => Hash::make($request->new_password)
        ]);
    
           return back()->with("status", "Le mot de passe a été changé avec succès!");
    }
   
}






