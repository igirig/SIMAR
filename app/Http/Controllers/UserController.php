<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(6);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserEditRequest $request, User $user)
    {
        $data = $request->only('name', 'email');
        $password = $request->input('password');
        if ($password)
            $data['password'] = bcrypt($password);

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('sucess', 'Usuario eliminado correctamente');
    }
}
