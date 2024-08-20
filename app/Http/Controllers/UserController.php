<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/admin/users')->with('error', 'User not found.');
        }

        // Delete the user
        $user->delete();

        return redirect('/admin/users')->with('success', 'User deleted successfully.');
    }

    public function deleteAccount(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $user = Auth::user();

        if (Hash::check($request->password, $user->password)) {
            // Delete the user account
            $user->delete();

            // Log the user out
            Auth::logout();

            return redirect('/')->with('success', 'Your account has been deleted successfully.');
        } else {
            return back()->withErrors(['password' => 'The provided password is incorrect.']);
        }
    }

    public function index()
    {
        return view('thankyou');
    }
    
    public function changeLanguage(Request $request)
    {
        $locale = $request->input('locale');
        app()->setLocale($locale);
        session()->put('locale', $locale);
    
        return redirect()->back();
    }
}
