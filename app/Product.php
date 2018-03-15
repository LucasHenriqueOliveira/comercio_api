<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
	public function getProducts() {
		return DB::select("SELECT * FROM `product`");
	}

	public function getProduct($id) {
		return DB::select("SELECT * FROM `product` WHERE `id`= ?", [$id]);
	}

	public function addProduct($request) {
		return DB::insert('INSERT INTO `product` (`category`, `name`, `price_cost`, `price_sale`, `stock`, `description`) VALUES (?, ?, ?, ?, ?, ?)',
			[$request['category'], $request['name'], $request['price_cost'], $request['price_sale'], $request['stock'], $request['description']]);
	}

	public function updateProduct($request, $id) {
		return DB::update('UPDATE `product` SET `category` = ?, `name` = ?, `price_cost` = ?, `price_sale` = ?, `stock` = ?, `description` = ? WHERE `id` = ?', [$request['category'], $request['name'], $request['price_cost'], $request['price_sale'], $request['stock'], $request['description'], $id]);
	}

	public function removeProduct($id) {
		return DB::update('UPDATE `product` SET `active` = 0 WHERE `id` = ?', [$id]);
	}

	public function activeProduct($id) {
		return DB::update('UPDATE `product` SET `active` = 1 WHERE `id` = ?', [$id]);
	}
}
