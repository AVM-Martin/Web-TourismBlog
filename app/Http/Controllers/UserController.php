<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm() {
        return view('user.login');
    }

    public function dashboard() {
        return view('user.home');
    }

    public function profile() {
        $this->authorize('user', User::class);

        return view('user.edit');
    }

    public function login(Request $request) {
        $result = Auth::attempt($request->only('email', 'password'));

        if ($result === false) {
            return redirect()->route('login')->withErrors([
                'message' => 'Invalid Credentials',
            ]);
        }

        return redirect()->route('user.dashboard');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('user.login');
    }

    public function blog() {
        $this->authorize('user', User::class);

        return view('user.blog', [
            'articles' => Auth::user()->articles()->paginate(30),
        ]);
    }

    // normal resources controller functions

    public function index() {
        $this->authorize('admin', User::class);

        return view('user.index', [
            'users' => User::where('role', 'user')->paginate(10),
        ]);
    }

    public function create() {
        return view('user.register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => [ 'required' ],
            'email' => [ 'required', 'email', 'unique:users,email' ],
            'phone_number' => [ 'required' ],
            'password' => [ 'required', 'string', 'confirmed', 'min:8' ],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();

        return redirect()->route('user.login');
    }

    public function show($id) {
        $this->authorize('admin', User::class);

        $user = User::findOrFail($id);

        return view('user.show', [
            'user' => $user,
            'articles' => $user->articles()->paginate(30),
        ]);
    }

    public function edit($id) {
        return abort(404, "No Page");
    }

    public function update(Request $request, $id) {
        $this->authorize('user', User::class);

        $this->validate($request, [
            'name' => [ 'required' ],
            'email' => [ 'required', 'email' ],
            'phone_number' => [ 'required' ],
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone_number;
        $user->save();

        return redirect()->route('user.dashboard');
    }

    public function destroy($id) {
        $this->authorize('admin', User::class);

        User::destroy($id);
        return redirect()->back();
    }
}
