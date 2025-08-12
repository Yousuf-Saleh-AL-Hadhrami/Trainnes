<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {

    // $this->middleware("auth");

    }
    public function index()
    {
        $users = User::paginate(10);

        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate input (optional but recommended)
    $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [];

    $data['name'] = $request->input('name');
    $data['email'] = $request->input('email');
    $data['password'] = bcrypt($request->input('password'));

    // Handle file upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = $file->store('users', 'public'); // stores in storage/app/public/users
        $data['image'] = $path; // save path to DB
    }

    // Create user
    $user = User::create($data);

    Mail::to('izkiboy@gmail.com')->send(new WelcomeMail($user));

    return redirect()
        ->route('users.index')
        ->with('success', "User {$user->name} ({$user->email}) created successfully!");
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        // dd($user);
        // dump($user);

        $user->update([
        "name"=> $request->name,
        "email"=> $request->email,
       ]);

       return redirect()->route("users.index")->with("success","User " . $user->name . "Updated Sucessfuly");        
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route("users.index")->with("success","User" .    $user->name . " Deleted!");
    }
}
