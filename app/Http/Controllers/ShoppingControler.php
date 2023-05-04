<?php

namespace App\Http\Controllers;

use App\Models\ShoppingModel;

class ShoppingControler
{

	private ShoppingModel $shoppingModel;

	public function __construct()
	{
		$this->shoppingModel = new ShoppingModel();
	}

	public function create() {

		$rows = [];
		foreach (request->data as $key => $value) {
			$rows[] = [
				$value["name"],
				$value["cantidad"],
				request->username
			];
		}

		$responseCreate = $this->shoppingModel->createDB($rows);
		if ($responseCreate->status === "database-error") {
			return $responseCreate;
			return error("Ocurrió un error al crear los usuarios");
		}

		return success("Se han registrado  compras correctamente");

	}

	public function read()
	{
	}

	public function update()
	{
	}

	public function delete()
	{
	}
}
