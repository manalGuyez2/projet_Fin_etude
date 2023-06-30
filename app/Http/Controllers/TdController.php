<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Td;
use Illuminate\Support\Facades\File;

class TdController extends Controller
{
    public function indexTd(){
        
        $dataTd = Td::Td();
        return view('TdShow', compact('dataTd'));

    }
    
    public function saveTd(Request $request){
    //$data = Student::get();
    //return view('Admin.ajouterEtudiant');
    //dd($request->all());
    $request->validate([
        'nomTd'=>'required',
        'tdpdf'=>'required',
      
        'IdModul'=>'required'

    ]);
    $nomTd = $request->nomTd;
    $tdpdf = $request->tdpdf;
    $IdModul = $request->IdModul;
    $td = new Td();
    $td->nomTd = $nomTd;
    if($request->hasfile('tdpdf'))
    {
        $file = $request->file('tdpdf');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/tds/', $filename);
        $td->tdpdf= $filename;
    }

    $td->IdModul = $IdModul;
    $td->save();
    
    return redirect()->back()->with('success'," Td est ajouté avec succès");
   
}


public function modTd($id){
   
    $Td = Td::findOrFail($id);
    

    // Return the data as a JSON response
    return response()->json($Td);

   
}

public function enrgTd(Request $request){
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
     
      Td::where('id','=',$id)->update([
       
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



  
public function suppTd(Request $request){

    Td::where('id','=',$request->td_delete_id)->delete();
    return redirect()->back()->with('success'," TD est supprimer avec succès");
}

public function downloadTd($file){
        
    return response()->download(public_path('uploads/tds/'.$file));
   
   }
///cours view
public function viewTd($id){
        
    $data=Td::find($id);
    return view('viewTd',compact('data'));
   
   }

   public function edit($id)
 {
     $td = Td::find($id);
     return view('editerTd', compact('td'));
 }

 public function update(Request $request, $id)
 {
     $td = Td::find($id);
     $td->nomTd = $request->input('nomTd');
     
     

     if($request->hasfile('tdpdf'))
     {
         $destination = 'uploads/tds/'.$td->tdpdf;
         if(File::exists($destination))
         {
             File::delete($destination);
         }
         $file = $request->file('tdpdf');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/tds/', $filename);
         $td->tdpdf = $filename;
     }

     $td->update();
     return redirect()->back()->with('status','Cours est modifier avec succès');
 }
 
}
