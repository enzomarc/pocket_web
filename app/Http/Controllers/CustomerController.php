<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
	public function index()
	{
		$page = 'customers';
		$title = 'Customers';
		return view('dashboard.customers', compact('page', 'title'));
	}
}
