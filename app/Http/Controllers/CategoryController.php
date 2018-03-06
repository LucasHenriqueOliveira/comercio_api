<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index() {

		$categories = new \App\Category();
		$res = $categories->getCategories();

		echo json_encode($res);
		exit;
	}

	public function show($id) {

		$category = new \App\Category();
		$res = $category->getCategory($id);

		echo json_encode($res);
	}

	public function store(Request $request) {

		$category = new \App\Category();
		$res = $category->addCategory($request->all());
		echo response()->json($res, 201);
	}

	public function update(Request $request, $id) {

		$category = new \App\Category();
		$res = $category->updateCategory($request->all(), $id);

		echo response()->json($res, 200);
	}

	public function delete($id) {

		$category = new \App\Category();
		$category->deleteCategory($id);

		return 204;
	}
}
