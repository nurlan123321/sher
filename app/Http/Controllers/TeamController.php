<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
class TeamController extends Controller
{
    public function execute(){
    	if (view()->exists('admin.people')) {
    		$people = People::all();
    		$data = [
    			'title' => 'Сотрудники',
    			'nameBtn' => 'Редактировать',
    			'people' => $people
    		];
    		return view('admin.people', $data);
    	}else{
    		return 'Страница не существует ошибка 404';
    	}
    }
}
