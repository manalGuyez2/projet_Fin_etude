<?php
/*
namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function indexModule(){
        
        $dataModule = Module::get();
        return view('Admin.module.ListeModule', compact('dataModule'));

    }

    public function ajouterModule(){
        
        return view('Admin.module.ajouterModule');
       
    }
    public function saveModule(Request $request){
        //$dataPrf = Module::get();
        //return view('Admin.ajouterEtudiant');
        //dd($request->all());
        $request->validate([
            
            'name'=>'required',
            'nameProf'=>'required',
            'nameSemester'=>'required'
           

        ]);
        
        $name = $request->name;
        $nameProf = $request->nameProf;
        $nameSemester = $request->nameSemester;
        

        $moduleData = new Module();
       
        $moduleData->name = $name;
        $moduleData->nameProf = $nameProf;
        $moduleData->nameSemester = $nameSemester;
       
        $moduleData->save();
        return redirect()->back()->with('success'," Le module est ajouté avec succès");
       
    }

    public function modModule($id){
        $dataModule = Module::where('id','=',$id)->first();
        return view('Admin.module.editerModule', compact('dataModule'));

    }

   public function enrgModule(Request $request){
         $request->validate([
            'name'=>'required',
            'nameProf'=>'required',
            'nameSemester'=>'required'
           
         ]);
         $id=$request->id;
         $name = $request->name;
         $nameProf = $request->nameProf;
         $nameSemester = $request->nameSemester;
        
         
         Module::where('id','=',$id)->update([
           
           'name'=>$name, 
           'nameProf'=>$nameProf, 
           'nameSemester'=>$nameSemester
          
         ]); 
         return redirect()->back()->with('success'," Le module est modifier avec succès"); 
   }



      
    public function suppPrf(Request $request){

        Module::where('id','=',$request->Module_delete_id)->delete();
        return redirect()->back()->with('success'," Le module est supprimer avec succès");
    }
}
*/