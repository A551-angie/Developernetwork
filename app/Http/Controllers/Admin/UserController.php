<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vacancy;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $vacancy = Vacancy::all();
        $user = User::all();
        return view('admin.users.index', compact('user', 'vacancy'));
    }
    public function destroy(User $user, Vacancy $vacancy)
    {
        
        $user->delete();

        return redirect()->route('admin.users.index')->with('info', 'El usuario se eliminó con éxito');
    }

}