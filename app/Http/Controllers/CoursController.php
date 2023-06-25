<?php

namespace App\Http\Controllers;
use App\models\Cours;
use App\models\Module;
use App\models\Prof;
use Illuminate\Http\Request;

class CoursController extends Controller
{  public $nomCours , $courpdf ,$IdModel,$coursid;
   
  
    public function indexCours(){
        
        $dataCours = Cours::get();
        return view('coursShow', compact('dataCours'));

    }
    
    public function savecours(Request $request){
    //$data = Student::get();
    //return view('Admin.ajouterEtudiant');
    //dd($request->all());
    $request->validate([
        'nomCours'=>'required',
        'courpdf'=>'required',
      
        'IdModel'=>'required'

    ]);
    $nomCours = $request->nomCours;
   
    $IdModel = $request->IdModel;
    $cou = new Cours();
    $cou->nomCours = $nomCours;
    if($request->hasfile('courpdf'))
    {
        $file = $request->file('courpdf');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/cours/', $filename);
        $cou->courpdf= $filename;
    }

    $cou->IdModel = $IdModel;
    $cou->save();
    
    return redirect()->back()->with('success'," cours est ajouté avec succès");
   
}


public function modCours($id){
   
    $cours = Cours::findOrFail($id);
    

    // Return the data as a JSON response
    return response()->json($cours);

   
}

public function enrgCours(Request $request){
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
     
     $password = $request->password;
     
     Cours::where('id','=',$id)->update([
       
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



  
public function suppCours(Request $request){

    Cours::where('id','=',$request->cours_delete_id)->delete();
    return redirect()->back()->with('success'," L'enseignants est supprimer avec succès");
}
/*

public function index(){
     return view('test');
    }
 
    public function getCours(){
        $Cours = Cours::all();
 
        return view('test')->with('Cours', $Cours);
    }
 
    public function save(Request $request){
        $Cours = new Cours;
        $Cours->nomCours = $request->input('nomCours');
        $Cours->courpdf = $request->input('courpdf');
        $Cours->IdModel = $request->input('IdModel');
        $Cours->save();
 
        return redirect('test');
    }
 
    public function update(Request $request, $id){
        $Cours = Cours::find($id);
        $input = $request->all();
        $Cours->fill($input)->save();
 
        return redirect('test');
    }
 
    public function delete($id)
    {
        $Cours = Cours::find($id);
        $Cours->delete();
  
        return redirect('test');
    }
  
*/
}
