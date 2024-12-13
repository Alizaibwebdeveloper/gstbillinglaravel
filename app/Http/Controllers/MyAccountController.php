<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Auth;
class MyAccountController extends Controller
{
    public function my_account(){

        $data['getRecord'] = User::find(Auth::user()->id);
       return  view('admin.my_account.update', $data);
    }

    public function my_account_update(Request $request)
    {
        // Fetch the current user
        $currentUser = Auth::user();
    
        // Validate the input, excluding the current user's email from uniqueness check
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $currentUser->id,
            'password' => 'nullable|min:6', // Allow password to be optional
        ]);
    
        // Update user record
        $user = User::find($currentUser->id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
    
        // Only update the password if provided
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
    
        $user->save();
    
        return redirect('admin/my_account')->with('success', 'My Account Successfully Updated!');
    }
    
}
