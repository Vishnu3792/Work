<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
	public
 
	function showLogin()
		{
 
		// Form View
 
		return view('login');
		}
 
	public
 
	function doLogout()
		{
		Auth::logout(); // logging out user
		return Redirect::to('login'); // redirection to login screen
		}
 
	public
 
	function doLogin()
		{
 			if (Auth::attempt(['userid' => $userid, 'password' => $password]))
        {
            return Redirect::to('/');
        }
		}
	}