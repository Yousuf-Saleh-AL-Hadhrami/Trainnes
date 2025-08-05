<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

=======
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD

    public function __construct()
    {

    // $this->middleware("auth");

    }
    public function index()
    {
        $users = User::paginate(10);
=======
    public function index()
    {
        $users = User::paginate(3);
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8

        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
    return view("users.create");
=======
        //
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
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

    return redirect()
        ->route('users.index')
        ->with('success', "User {$user->name} ({$user->email}) created successfully!");
}

=======
    public function store(Request $request)
    {
        //
    }

>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
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
<<<<<<< HEAD
        $user = User::findOrFail($id);

        return view("users.edit", compact("user"));
=======
        //
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        $user = User::findOrFail($id);

        // dd($user);
        // dump($user);

        $user->update([
        "name"=> $request->name,
        "email"=> $request->email,
       ]);

       return redirect()->route("users.index")->with("success","User " . $user->name . "Updated Sucessfuly");        
        
        
=======
        //
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route("users.index")->with("success","User" .    $user->name . " Deleted!");
=======
        //
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
    }
}
