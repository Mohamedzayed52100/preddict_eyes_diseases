<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Advice;
use App\Models\History;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index(Request $request){
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $user = User::find($request->id);
         $user->image = $imageName;
        $user->save();
        return back();
    }


    public function pinfoedit($id){

        $data =User::find($id);
        session([
            'name'=>$data->name,
            'image'=>$data->image,
            ///'pass'=>$data->name,
        ]);


        return view('editinformation' , compact('data'));


    }
    public function savachange(Request $request){
        $student = User::find($request->id);


        if($request->name ==session('name') && $request->password ==null && $request->file ==session('image'))
        return redirect('/dashboard');




if ($request->name) {
    $name=$request->name;
    $student->name = $name;
}
      //  $password=$request->password;
if ($request->file) {
    $image=$request->file('file');
    $imageName=time(). '.' .$image->extension();
    $image->move(public_path('images'), $imageName);
    $student->image = $imageName;
}
if($request->password){
    $student->password =  Hash::make($request->password);
}


        $student->save();
        return back()->with('success_update','patient record has been  updated');

    }

    public function history($id){
        $data =DB::select('select * from histories where patient_id = ?' ,[$id]);
        return view('myhistory' , ['data'=>$data]);


        //return $data;



    }

    public function modelpage(){

    }

    public function doctors(){
        return redirect('/showUpload');

        return view('doctors');

    }

    public function admainlogin(){
        return view('admainlogin');
    }
    public function  checkadmainlogin(Request $request){

        if($request->password== 123456789 && $request->name="admain")
        return redirect('/admain');
        else
        return back()->with('invalid' , 'incorrect data');

    }

    public function admain (){
        return  view('admain');


    }
    public function allpatient(){
        $data =User::all();
        return view('allpatient' , compact('data'));

    }
    public function deletedata($id){
        DB::delet('delete from users where id =? ' ,[$id]);
        return back()->with('success_delete' , 'data has been deleted');

    }
    public function alladvices(){
        $data =Advice::all();
        return view('alladvices' , ['data'=>$data]);


    }

    public function alladvicesgiven(){
        $data =Advice::all();
        return view('alladvicesgiven' , ['data'=>$data]);
    }
    public function addadvice(Request $request){


        // Advice::create([$request->all()]);
        DB::table('advice')->insert([
            'data'=>$request->data,

        ]);

        return redirect('/alladvices');


    }

    public function allhistory(){
        $data =History::all();
        return view('allhistory' , compact('data'));

    }



    public function showUpload(){
        ///return auth()->user()->id;
          return view('upload');
    }
    public function upload(Request $request){

        // $saraid =auth()->user()->id;
        // return $saraid;


        // $image=$request->file('file');
        // $imageName=time(). '.' .$image->extension();
        // $image->move(public_path('radiology_images'),$imageName);

        // // E:\courses\backend\larvel\laravel\A\expert_system_test\fisha\public

        // //E:\courses\backend\larvel\laravel\A\expert_system_test\fisha\public\radiology_images
        // $newimgName="D:/my-website/public/radiology_images/{$imageName}";
        // //Model
        // $url = 'http://127.0.0.1:9000/classify';
        // //path same name in python function
        // $data =["path" => $newimgName];
        // $options = ['http'=> ['header' => "Content-type: application/x-www-form-urlencoded\r\n",
        //         'method' => 'POST','content' => http_build_query($data)]
        //  ] ;
        // $context = stream_context_create($options);
        // $result = file_get_contents($url,false,$context);
        // $result = json_decode($result , true);
        //insert result , userid
        if(session('userid'))return "yes";
       /// DB::insert('insert into histories( data,patient_id) values(?,?)', [$result['Class Name: '],session('userid') ]);
      ////  DB::insert('insert into histories( data,patient_id) values(?,?)', [$result['class_name'],session('userid') ]);
      else
      return "no";
        // session()->regenerate();
        // session([
        //     'RadiologyResult' => true,
        //     'result' => $result['Class Name: '],
        //     'result' => $result['class_name']

        //  ]);

        // return redirect('/result');
    }
    public function showResult(){
        return view('result');
    }




}
