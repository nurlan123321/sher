<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    public function execute(){
    	if (view()->exists('admin.about')) {
    		$about = About::all();
    		$data = [
    			'title' => 'О нас',
    			'nameBtn' => 'Редактировать',
    			'about' => $about
    		];
    		return view('admin.about',$data);
    	}else{
    		return 'Страница не существует ошибка 404';
    	}

    }
}
