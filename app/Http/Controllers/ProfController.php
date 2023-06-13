<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;
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
            'module1'=>'required',
            'module2'=>'required',
            'module3'=>'required',
            'password'=>'required',

        ]);
        
        $cne = $request->cne;
        $nom = $request->nom;
        $email = $request->email;
        $naissance = $request->naissance;
        $module1 = $request->module1;
        $module2 = $request->module2;
        $module3 = $request->module3;
        $password = $request->password;

        $prf = new Prof();
       
        $prf->cne = $cne;
        $prf->nom = $nom;
        $prf->email = $email;
        $prf->naissance = $naissance;
       
        $prf->module1 = $module1;
        $prf->module2= $module2;
        $prf->module3= $module3;
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
            'module1'=>'required',
            'module2'=>'required',
            'module3'=>'required',
            'password'=>'required',
         ]);
         $id=$request->id;
         $cne = $request->cne;
         $nom = $request->nom;
         $email = $request->email;
         $naissance = $request->naissance;
         $module1 = $request->module1;
         $module2 = $request->module2;
         $module3 = $request->module3;
         $password = $request->password;
         
         Prof::where('id','=',$id)->update([
           
           'cne'=>$cne, 
           'nom'=>$nom, 
           'email'=>$email,
           'naissance'=>$naissance,
           'module1'=>$module1,
           'module2'=>$module2,
           'module3'=>$module3,
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
        if($profData && $request->password == $profData->password){
            $request->session()->put('prof', $profData->id);
            return redirect('courEnsg');
        }else{
            return back()->with('fail','le mot de passe ne correspond pas.');
        }

    } else{
        return back()->with('fail',"cet email n'est pas enregistré");
        }
         
    }
    public function courEnsg(){
        $prof = array();
       if(Session::has('prof')){
        $prof = Prof::where('id','=', Session::get('id'))->first();
       }

        return view('/courEnsg', compact('prof'));
    }

    public function logoutProf(){
        if(Session::has('prof'))
        {
            Session::pull('prof');
            return redirect('/');
        }
        else
        return redirect('/cours');
    } 
   
}






