<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Category;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;

class AboutController extends Controller
{
    public function index(Department $department ,Category $category,About $about){
        $departments = Department::all();
        $abouts=About::orderBy('id','desc')->paginate('12');
        return view('admin.about.index',compact('departments','category','abouts'));
    }

    public function index1(About $about){
        $abouts=About::orderBy('id','desc')->paginate('12');
        return view('admin.about.index1',compact('abouts'));
    }

    public function create(){
        return view('admin.about.create');
    }

    public function store( AboutStoreRequest $request){
        $data = $request->validated();
        $file = $request->file('filename');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('filename')){
            $path=$request->file('filename')->store('aboutus','public');
        }
         $about=About::create([
            'title' => $data['title'],
            'filename' => $path,
            'actual_filename' => $name,
            'extension'=>$extension,
            
        ]);
        return redirect()->route('about.index1')->with('success', 'Year Information has been created successfuly!');
    }
    
    public function show(About $about){
        
       $pathToFile = storage_path('app/public/' . $about->filename);
        
        return response()->file($pathToFile,['file', 'application/pptx']);
      
       
    }
  
       public function delete(About $about){
           return view('admin.about.delete',compact('about'));
       }
    
       public function destroy(About $about){
           $about->delete();
           return redirect()->route('about.index1')->with('success', 'Information has been deleted successfuly!');
       }



    public function contact(Department $department,Category $category){
        $departments =Department::all();
        return view('admin.about.contact',compact('departments','category'));
    }

    public function help(Department $department ,Category $category){
        $departments =Department::all();
        return view('admin.about.help',compact('departments','category'));
    }

    public function policy(Department $department ,Category $category){
        $departments = Department::all();
        return view('admin.about.policy',compact('departments','category'));
    }

    public function faq(Department $department ,Category $category){
        $departments = Department::all();
        return view('admin.about.faq',compact('departments','category'));
    }

   public function terms(Category $category){
    $departments = Department::all();
    return view('admin.about.terms',compact('departments','category'));
   }
   
   public function event(Category $category){
    $departments =Department::all();
    return view('admin.about.event',compact('departments','category'));
   }
}
