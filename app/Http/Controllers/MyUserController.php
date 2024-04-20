<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Carbon\Carbon;
class MyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=MyUser::all();
        return view('admin.users.users_view',compact(var_name:'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.users_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'fullname'=>'required', 
            'email' => 'email:rfc,dns',
            'password'=>'required',
            'img'=>'image|max:2048',
            'location'=>'required|max:255',
            'phone'=>'required|max:255',
            'date_of_birth' => 'required',
        ]);

        $myUser=new MyUser();
        $myUser->fullname=$request->fullname;
        $myUser->email=$request->email;
        $myUser->password=$request->password;
        $myUser->img=$request->img;
        $myUser->location=$request->location;
        $myUser->Phone=$request->Phone;
        $dateOfBirth = Carbon::createFromFormat('d/m/Y', $request->date_of_birth)->format('Y-m-d');
        $myUser->date_of_birth = $dateOfBirth;
        $myUser->save();
        return redirect()->route('users.index')->with('success','User added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users=MyUser::onlyTrashed()->get();
        return view('admin.users.users_soft_delete',compact(var_name:'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=MyUser::findOrFail($id);
        return view('admin.users.users_edit',compact(var_name:'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $user=MyUser::findOrFail($id);
        $user->update([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'password'=>$request->password,
            'img'=>$request->img,
            'location'=>$request->location,
            'Phone'=>$request->Phone,
            'date_of_birth'=>$request->date_of_birth,

        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        MyUser::findOrFail($id)->delete();     
        return redirect()->route('users.index');
    }

    public function showDeletedUsers(){

        $users=MyUser::whereNotNull('deleted_at')->get();
return view('admin.users.users_soft_delete',compact('users'));
    }

    public function restore($id){
        MyUser::withTrashed()->where('id',$id)
       ->restore();
        return redirect()->route('users.index');
       // return view('admin.users.users_edit',compact(var_name:'id'));
    }
    
    public function forceDelete($id)
    {
        MyUser::withTrashed()->where('id',$id)
        ->forceDelete();
         return redirect()->route('users.index');
    }
}
