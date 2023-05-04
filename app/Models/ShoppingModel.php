<?php

namespace App\Models;

use LionSQL\Drivers\MySQL as DB;

class ShoppingModel {

	public function __construct() {
		
	}

	public function createDB(array $rows) {
		return DB::table("shooping")
		->bulk([
			"shooping_name",
			"amount",
			"shooping_username"
		],$rows)->execute();
	}

}