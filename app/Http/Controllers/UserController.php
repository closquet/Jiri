<?php

namespace Jiri\Http\Controllers;

use Illuminate\Http\Request;
use Jiri\User;

class UserController extends Controller
{
	public function index(){
		$users = User::all();
		
		
		return response($users);
	}
}
