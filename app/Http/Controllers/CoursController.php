<?php

namespace App\Http\Controllers;
use App\models\Cours;
use App\models\Module;
use App\models\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CoursController extends Controller
{ public $nomCours , $courpdf ,$IdModel,$coursid;
    public function index(){
        
        $data = Cours::get();
        return view('test', compact('data'));

    }
    

    public function savecours(Request $request){
        //$data = Student::get();
        //return view('Admin.ajouterEtudiant');
        //dd($request->all());
        $request->validate([
            'nomCours'=>'required',
            'courpdf'=>'required|file',
          
            'IdModel'=>'required',

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

    public function enrgCou(Request $request){
        $request->validate([
            'nomCours'=>'required',
            'courpdf'=>'required|file',
          
            'IdModel'=>'required',
        ]);
        $nomCours = $request->nomCours;
        if($request->hasfile('courpdf'))
        {
            $file = $request->file('courpdf');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/cours/', $filename);
            
        }
       
        $IdModel = $request->IdModel;
        
        Cours::where('id','=',$request->cours_edit_id)->update([
            'nomCours'=>$nomCours, 
            'courpdf'=>$filename, 
            'IdModel'=>$IdModel, 
          
        ]); 
        return redirect()->back()->with('success',"le est modifier avec succès"); 
  }
  public function suppcour(Request $request){

    Cours::where('id','=',$request->cours_delete_id)->delete();
    return redirect()->back()->with('success'," le cours est supprimer avec succès");
}

public function download($file){
        
 return response()->download(public_path('uploads/cours/'.$file));

}
public function view($id){
        
  $data=Cours::find($id);
  return view('viewcours',compact('data'));
 
 }

 public function edit($id)
 {
     $cours = Cours::find($id);
     return view('editerCours', compact('cours'));
 }

 public function update(Request $request, $id)
 {
     $cours = Cours::find($id);
     $cours->nomCours = $request->input('nomCours');
     
     

     if($request->hasfile('courpdf'))
     {
         $destination = 'uploads/cours/'.$cours->courpdf;
         if(File::exists($destination))
         {
             File::delete($destination);
         }
         $file = $request->file('courpdf');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/cours/', $filename);
         $cours->courpdf = $filename;
     }

     $cours->update();
     return redirect()->back()->with('status','Cours est modifier avec succès');
 }
 

    
}
