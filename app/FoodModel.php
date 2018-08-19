<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodModel extends Model
{
	protected $table = 'food';

	protected $fillable = ['id_food', 'name_food', 'description_food', 'images_food', 'price_food',	'category',	'category_food'];

	public $timestamps = false;
}
