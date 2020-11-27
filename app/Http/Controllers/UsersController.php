<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    private $objUser;

    public function __construct()
    {
        $this->objUser = new User();
    }

    public function index()
    {
        $user= $this->objUser;
        return view('users', compact('user'));
    }
    public function create()
    {
    }
    public function store()
    {
    }
    public function show()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
