<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registration extends Controller
{
    // simply returns a registration view
    function registrationView()
    {

        $status = null;
        $message = "";

        return view('registration', compact('status', 'message'));
    }

    //simply returns a login view
    function  loginView()
    {

        $status = false;
        $message = "";
        return view('login', compact('status', 'message'));
    }

    function registrationData(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $image_detail = $request->file('file');
        $image_name = $image_detail->getClientOriginalName();

        try {

            $users = users::where('email', $email)->first();
            if ($users) {
                //email already exists
                return redirect()->back()->with(['email_exists' => 'yes', 'message' => 'Email already exists']);
            }


            if ($request->hasFile('file')) {
                $profile_image_folder = 'user_dp';

                $profile_img = $request->file('file');
                // $profile_img_name  = $profile_img->getClientOriginalName();
               
                $dp_unique_name = $profile_img->hashName();
                $profile_img->storeAs('public/' . $profile_image_folder, $dp_unique_name);

            }

            $users = new users();
            $users->name = $name;
            $users->email = $email;
            $users->password = $password;
            $users->image_name = $dp_unique_name;
            $users->save();

            session(['status' => 'pass', 'message' => 'Registered Sucessfully!']);
        } catch (\Throwable $th) {
            session(['status' => 'fail', 'message' => 'Error Occured!']);
        }

        return redirect('registration')->with(['status' => session('status'), 'message' => session('message')]);
    }

    function loginData(Request $request)
    {


        $email = $request->input('email');
        $password = $request->input('password');

        try {

            $user = users::where('email', $email)->first();


            if ($user && Hash::check($password, $user->password)) {
                $user_mail = $user->email;
                $user_name = $user->name;
                session(['valid_user' => 'yes', 'email' => $user_mail, 'name' => $user_name]);
                return redirect('home');
            } else {
                session(['valid_user' => 'no', 'message' => 'Invalid Credentials']);
                return redirect('login');
            }
        } catch (\Throwable $th) {

            session(['valid_user' => 'no', 'message' => 'Error Occured']);
        }
    }

    function update_profile(Request $req)
    {
        $email = $req->session()->get('email');

        $user_detail = users::where('email', $email)->select('id', 'name', 'email', 'image_name')->first();

        if ($user_detail) {
            // $id = $user_detail->id;
            $name = $user_detail->name;
            $email = $user_detail->email;
            $image_name = 'user_dp/' . $user_detail->image_name;

            return view('update_user_info', ['name' => $name, 'email' => $email, 'img' => $image_name]);
        }
    }

    function edit_data(Request $req)
    {

        $db_email = $req->session()->get('email');



        if ($db_email == null) {
            return view('home');
        }


        $user = users::where('email', $db_email)->first();
        $dp_path = 'user_dp/' . $user->image_name;


        $name = $req->input('name');
        $new_password = $req->input('password');
        $dp = $req->file('file');


        $old_password = $req->input('old_password');
        if ($user && Hash::check($old_password, $user->password)) {

            if ($req->hasFile('file')) {
                $profile_image_folder = 'user_dp';
                $dp = $req->file('file');


                // $dp = $req->file('file');
                // $dp_name  = $dp->getClientOriginalName();


                if (!empty($dp)) {

                    // delete the previous image from directory 
                    $previousImagePath = "public/{$profile_image_folder}/{$user->image_name}";

                    // Delete the previous image if it exists
                    if (Storage::exists($previousImagePath)) {
                        Storage::delete($previousImagePath);
                    }


                    // making new image unique and stored it to user_dp folder
                    $dp_unique_name = $dp->hashName();
                    $dp->storeAs('public/' . $profile_image_folder, $dp_unique_name);
                }
            }

            // editing records

            if (!empty($name)) {
                $user->name = $name;
            }

            if (!empty($new_password)) {
                $user->password = Hash::make($new_password);
            }

            if (!empty($dp)) {
                $user->image_name = $dp_unique_name;
            }

            $user->save();

            session(['name' => $user->name]);

            return redirect('profile')
                ->with('success', 'Profile updated successfully');
        } else {
            return redirect('profile')->with('error', 'Failed to update');
        }
    }
}
