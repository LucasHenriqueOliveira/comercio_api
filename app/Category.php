<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
	public function getCategories() {
		return DB::select("SELECT * FROM `category` WHERE `active`= 1");
	}

	public function getCategory($id) {
		return DB::select("SELECT * FROM `category` WHERE `id`= ?", [$id]);
	}

	public function addCategory($request) {
		return DB::insert('INSERT INTO `category` (`name`) VALUES (?)', [$request['name']]);
	}

	public function updateCategory($request, $id) {
		return DB::update('UPDATE `category` SET `name` = ? WHERE `id` = ?', [$request['name'], $id]);
	}

	public function deleteCategory($id) {
		return DB::update('UPDATE `category` SET `active` = 0 WHERE `id` = ?', [$id]);
	}
}
