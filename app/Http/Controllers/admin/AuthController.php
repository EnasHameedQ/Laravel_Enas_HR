<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        $token = $user->createToken('authtoken');

        return response()->json(
            [
                'message' => 'User Registered',
                'data' => ['token' => $token->plainTextToken, 'user' => $user]
            ]
        );
}

    public function listAll()
    {

        $users = User::where('is_active', 1)
            ->where('email_verified_at', '!=', NULL)
            ->orWhere('name', 'like', '%af%')
            ->orderBy('user_id', 'desc')
            // ->take(2)
            ->get();
        //$user=User::find(1);
        //return response($user);
        return view('admin.users.list_users')
            ->with('allUsers', $users);
    }

    public function showLogin()
    {
        if (Auth::check())
            return redirect()->route($this->checkRole());
        else
            return view('admin.login');
    }



    public function checkRole()
    {
        if (Auth::user()->hasRole('admin'))
            return 'dashboard';
        else
            return 'home';
    }

   
    }


    public function login(LoginRequest $request)
    {
        $request->authenticate();


        Validator::validate($request->all(), [
            'full_name' => ['required', 'min:3', 'max:50'],
            'u_email' => ['required', 'email', 'unique:elib_users,email'],
            'user_pass' => ['required', 'min:5'],
            'confirm_pass' => ['same:user_pass']


        $token = $request->user()->createToken('authtoken');

        return response()->json(
            [
                'message' => 'Logged in baby',
                'data' => [
                    'user' => $request->user(),
                    'token' => $token->plainTextToken
                ]
            ]
        );
    }

  

        $u = new User();
        $u->name = $request->full_name;
        $u->password = Hash::make($request->user_pass);
        $u->email = $request->u_email;

        if ($u->save()) {
            $u->attachRole('admin');
            return redirect()->route('home')
                ->with(['success' => 'user created successful']);
        }


        return back()->with(['error' => 'can not create user']);
    }


    public function editUser()
    {
        $u = User::find(5);
        if ($u->hasRole('admin')) {
        } else {
        }
    }
    public function resetPassword()
    {
    }
    public function logout()
    {

        Auth::logout();
        return redirect()->route('login');

    }
}
