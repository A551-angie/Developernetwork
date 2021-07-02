<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.users.index', compact('user'));
    }
    public function destroy(User $use)
    {
        $use->delete();
        return redirect()->route('admin.users.index')->with('info', 'La categoría se eliminó con éxito');
    }

}