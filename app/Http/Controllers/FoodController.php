<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;
use App\Http\Requests\UpdateFood;
use Illuminate\Support\Facades\DB;
use App\FoodModel;
use Validator;

class FoodController extends Controller
{
	//Client Page Controller
	public function GetFoodHome() {
		$food = FoodModel::all();
		return view('home', compact('food'));
	}

	public function GetFoodCate (Request $request, $food) {
		if($food=='doan') {
			$food='Đồ Ăn';
			$name1='Món Bắc';
			$name2='Món Trung';
			$name3='Món Nam';
			$name4='Món Tráng Miệng';
			$number1=1;
			$number2=2;
			$number3=3;
			$number4=4;
			$Cate = DB::table('food')
				->where('category','=',1)
				->get();
			return view('food', compact('food','Cate','name1','name2','name3','name4','number1','number2','number3','number4'));

		}else if($food=='douong') {
			$food='Đồ Uống';
			$name1='Nước Ép';
			$name2='Món Giải Khát';
			$name3='Món Có Cồn';
			$number1=5;
			$number2=6;
			$number3=7;
			$Cate = DB::table('food')
				->select('id_food', 'name_food', 'description_food', 'images_food', 'price_food',	'category',	'category_food')->where('category','=',2)
				->get();
			return view('food', compact('food','Cate','name1','name2','name3','name4','number1','number2','number3'));
		}else return redirect('home');
	}

	public function GetDoAnChild (Request $request, $name) {
		if($name=='mienbac') {
			$name= 'Miền Bắc';
			$Cate = DB::table('food')
				->where('category_food','=',1)
				->get();
			return view('food-child', compact('name','Cate'));
		}else if($name=='mientrung') {
			$name= 'Miền Trung';
			$Cate = DB::table('food')
				->where('category_food','=',2)
				->get();
			return view('food-child', compact('name','Cate'));
		}else if($name=='miennam') {
			$name= 'Miền Nam';
			$Cate = DB::table('food')
				->where('category_food','=',3)
				->get();
			return view('food-child', compact('name','Cate'));
		}else if($name=='montrangmieng') {
			$name= 'Món Tráng Miệng';
			$Cate = DB::table('food')
				->where('category_food','=',4)
				->get();
			return view('food-child', compact('name','Cate'));
		}else return view('home');
	}

	public function GetDoUongChild (Request $request, $name) {
		if($name=='nuocgiaikhat') {
			$name= 'Nước Giải Khát';
			$Cate = DB::table('food')
				->where('category_food','=',5)
				->get();
			return view('food-child', compact('name','Cate'));
		}else if($name=='nuocep') {
			$name= 'Nước Ép';
			$Cate = DB::table('food')
				->where('category_food','=',6)
				->get();
			return view('food-child', compact('name','Cate'));
		}else if($name=='nuoccocon') {
			$name= 'Nước Có Cồn';
			$Cate = DB::table('food')
				->where('category_food','=',7)
				->get();
			return view('food-child', compact('name','Cate'));
		}else return view('home');
	}

	public function GetFoodID (Request $request, $id) {
		$getfood = DB::table('food')
		->where('id_food','=',$id)
		->first();
		return view('food-detail', compact('getfood'));
	}

	//Admin Page Controller
	public function AddFood (FoodRequest $request) {
		$food = new FoodModel;
		$food->name_food = $request->name;
		$food->description_food = $request->description;
		$file = $request->file('img')->getClientOriginalName();
		$request->file('img')->move('images/product',$file);
		$food->images_food = $file;
		$food->price_food = $request->price;
		$food->category = $request->category;
		$food->category_food = $request->categoryfood;
		$food->save();
		return redirect('admin/food');
	}

	public function GetAllFood(Request $request) {
		$name = 'Sản Phẩm';
		$GetFoodAll = FoodModel::all();
		return view('admin.product', compact('GetFoodAll','name'));
	}

	public function EditFood(Request $request, $id) {
		$name="Sửa sản phẩm";
		$GetFoodID = DB::table('food')
		->where('id_food','=',$id)
		->first();
		return view('admin.editproduct', compact('name','GetFoodID'));
	}
	public function UpdateFood(UpdateFood $request) {
		if($request->file('img')) {
			$file = $request->file('img')->getClientOriginalName();
			$request->file('img')->move('images/product',$file);
		}else {
			$file = $request->img2;
		}
		DB::table('food')
			->where('id_food', $request->id)
			->update([
				'name_food' =>  $request->name,
				'description_food' => $request->description,
				'images_food' => $file,
				'price_food' => $request->price,
				'category' => $request->category,
				'category_food' => $request->categoryfood
			]);
		return redirect('admin/food');
	}
	public function DeleteFood(Request $request, $id) {
		DB::table('food')->where('id_food', '=', $id)->delete();
		return redirect('admin/food');
	}
}
