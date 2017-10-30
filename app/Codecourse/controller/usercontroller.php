<?php 

namespace Codecourse\controller;
use Codecourse\Models\User;


class usercontroller
{
	
	function __construct()
	{
		
		
		var_dump("Index of User controller <br/>");

	 
	
	}
	public function index()
	{
	 
		var_dump("user of index controller<br/>");
		$user = new User();
		$userData = [

			'name'=>"Ayan",
			'email' =>"Ayan@gmail.com",
			'phone' =>"034555555",
			'reg_no' =>"abc123",
			'address' =>"piran mkd"

		];
		$response = $user->save($userData);
			var_dump($response);
		if ($response) {

			echo "<h1>User Resgestred</h1>";
		
		}

	}
	public function store()
	{
		
	}
	public function create()
	{
		# code...
	}
	public function update()
	{
		# code...
	}
	public function edit()
	{
		 var_dump("Index Action of Edit controller <br/>");
	}
	public function delete()
	{
		# code...
	}
}


 ?>