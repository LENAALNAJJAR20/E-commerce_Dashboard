<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
//    public function index(Request $request)
//    {
//        $query = $request->input('search');
//        $users = User::when($query, function ($queryBuilder) use ($query) {
//            return $queryBuilder->where('name', 'like', '%' . $query . '%');
//        })->get();
//        return view('users.index', compact('users'));
//    }
    public function index(Request $request)
    {
        $query = User::query();
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('email')) {
            $query->orWhere('email', 'like', '%' . $request->input('email') . '%');
        }
        $users = $query->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('Users/create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        User::create($validatedData);
        return redirect()->route('users.index');
    }
    public function edit(User $user)
    {
        return view('Users/edit',compact('user'));
    }
    public function update(Request $request,User $user){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);
        $user->update($validatedData);
        return redirect()->route('users.index');
    }
    public function destroy($id){
        User::destroy($id);
        return redirect()->route('users.index');
    }

    public function showSendMessageForm($id)
    {
        $user = User::findOrFail($id);
        return view('users.send_message', compact('user'));
    }

    public function sendMessage(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $message = $request->input('message');
        return redirect()->route('users.index')->with('success', 'Message sent successfully!');
    }

}
