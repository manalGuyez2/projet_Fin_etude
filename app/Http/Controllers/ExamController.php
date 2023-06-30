<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExamController extends Controller
{
    
    public function indexExam(){
        
        $dataExam = Exam::get();
        return view('coursShow', compact('dataExam'));

    }
    
    public function saveExam(Request $request){
    //$data = Student::get();
    //return view('Admin.ajouterEtudiant');
    //dd($request->all());
    $request->validate([
        'nomExam'=>'required',
        'exampdf'=>'required',
      
        'IdModul'=>'required'

    ]);
    $nomExam = $request->nomExam;
  
    $IdModul = $request->IdModul;
    $Exam = new Exam();
    $Exam->nomExam = $nomExam;
    if($request->hasfile('exampdf'))
    {
        $file = $request->file('exampdf');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/Exams/', $filename);
        $Exam->exampdf= $filename;
    }

    $Exam->IdModul = $IdModul;
    $Exam->save();
    
    return redirect()->back()->with('success'," Exam est ajouté avec succès");
   
}


public function modExam($id){
   
    $Exam = Exam::findOrFail($id);
    

    // Return the data as a JSON response
    return response()->json($Exam);

   
}

public function enrgExam(Request $request){
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
     
      Exam::where('id','=',$id)->update([
       
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



  
public function suppExam(Request $request){

    Exam::where('id','=',$request->exam_delete_id)->delete();
    return redirect()->back()->with('success'," Exam est supprimer avec succès");
}


public function downloadExam($file){
        
    return response()->download(public_path('uploads/exams/'.$file));
   
   }


public function viewExam($id){
        
    $data=Exam::find($id);
    return view('viewExam',compact('data'));
   
   }
   public function edit($id)
 {
     $Exam = Exam::find($id);
     return view('editerExam', compact('Exam'));
 }

 public function update(Request $request, $id)
 {
     $Exam = Exam::find($id);
     $Exam->nomExam = $request->input('nomExam');
     
     

     if($request->hasfile('exampdf'))
     {
         $destination = 'uploads/Exam/'.$Exam->courpdf;
         if(File::exists($destination))
         {
             File::delete($destination);
         }
         $file = $request->file('exampdf');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/Exam/', $filename);
         $Exam->courpdf = $filename;
     }

     $Exam->update();
     return redirect()->back()->with('status','Examen est modifier avec succès');
 }
 

}

