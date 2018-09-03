<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\input;
use App\admin\PackageModel;
class package extends Controller
{
	public function index(){
		
		$packages = DB::table('packages')->get();

        return view('pages.package.index', ['packages' => $packages]);
		
	}
	
	public function save(Request $request){		
	    $var = new PackageModel ;
		$var->name = input::post('name');
		$var->active = input::post('active');
		$var->ordering = input::post('ordering');
		
		
		
		$data = array(
			'name' => $var->name,
			'active' => $var->active,
			'ordering' => $var->ordering
			
		);
		DB::table('packages')->insert($data);
		echo "successfuly";
       
		
	}
	
	
	public function fun2(){
		return view("layouts.admin");
	}
}
