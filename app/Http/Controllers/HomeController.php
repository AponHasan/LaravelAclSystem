<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function userList()
    {
        $users=User::with('roles','user_permissions')->get();
        return view('user',compact('users'));
    }

    public function userEdit($id)
    {
        $user =User::with('roles','user_permissions')->findOrFail($id);
        $roles=Role::all();
        $permissions=Permission::all();
        return view('updatePages.user_edit',compact('user','roles','permissions'));
    }

    public function roleList()
    {
       $roles=Role::with('role_permissions')->get();
        return view('role',compact('roles'));
    }

    public function permissionList()
    {
        $permissions=Permission::all();
        return view('permission',compact('permissions'));
    }
}
