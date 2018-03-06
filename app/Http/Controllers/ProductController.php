<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index() {

		$products = new \App\Product();
		$res = $products->getProducts();

		echo json_encode($res);
		exit;
	}

	public function show($id) {

		$product = new \App\Product();
		$res = $product->getProduct($id);

		echo json_encode($res);
	}

	public function store(Request $request) {

		$product = new \App\Product();
		$res = $product->addProduct($request->all());
		echo response()->json($res, 201);
	}

	public function update(Request $request, $id) {

		$product = new \App\Product();
		$res = $product->updateProduct($request->all(), $id);

		echo response()->json($res, 200);
	}

	public function delete($id) {

		$product = new \App\Product();
		$product->deleteProduct($id);

		return 204;
	}
}
