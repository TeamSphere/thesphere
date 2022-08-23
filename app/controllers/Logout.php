<?php 

/**
 * logout class
 */
class Logout extends Controller
{
	
	public function index()
	{
		session_start();
		Auth::logout();
		redirect('home');
	}
	
}