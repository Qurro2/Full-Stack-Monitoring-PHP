<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MyProfilController extends Controller
{
    public function updateProfile(Request $request){
        $request->validate([
             "name" => "required|min:3|max:50",
             "photo" => "nullable|file|mimes:jpeg,png|max:1000",
         ]);
         $user = User::find(auth()->id());
         $user->name = $request->name;
         $user->email = $request->email;
         if($request->hasFile('photo')){
            //delete old photo  => path:storage/profile/profile_6221cecf36ad9.jpg
             $subStrPhotoName = Str::substr($user->photo,16);
             Storage::delete('public/profile/'.$subStrPhotoName);
            //create new photo
             $dir="storage/profile";
             $newName = "profile_".uniqid().".".$request->file('photo')->extension();
             $request->file('photo')->storeAs("public/profile",$newName);
             $user->photo = $dir."/".$newName;
         }
         $user->update();
         return redirect()->back()->with('success', 'Ganti Profil Berhasil !!');
     }
    public function cpassword(Request $request)
    {
        $user = User::find(auth()->id());
        $user->password = $request->password;
        return redirect()->back()->with('success', 'Ganti Password Berhasil !!');
    }
}
