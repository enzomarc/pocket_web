<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * Show the getting started page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function start()
	{
		$page = 'getting started';
		return view('dashboard.start', compact('page'));
	}
	
	/**
	 * Show the dashboard home page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function home()
	{
		$page = 'home';
		return view('dashboard.home', compact('page'));
	}
}
