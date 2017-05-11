<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\People;
class TeamAddController extends Controller
{
    public function execute(Request $request){

    	//add service code
    	if ($request->isMethod('post')) {
    		$input = $request->except('_token'); //vse zapisi iz inputov krome _token kotoryi dobavil laravel
    	
    		$messages = [
    			'required' => 'Поле :attribute не заполнено!!!'
    		];

    		$validator = Validator::make($input, [
    			'name' => 'required|max:255',
    			'position' => 'required|max:255',
    			'text' => 'required'
			], $messages);
			if ($validator->fails()) {
				//esli net zapisi v inpute vernut nazad na stranicu dobavleniya. withInput() ne udalyaet zapisi iz inputa v slu4ae owibki
				return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
			}
			//kartinka
			if ($request->hasFile('images')) {
				$file = $request->file('images');// images eto name pole inputa
				$input['images'] = $file->getClientOriginalName();//polu4aem name kartinki kak ono est 
				$file->move(public_path().'/img', $input['images']);//public_path eto papka public $input['images'] imya kartinki
			}
			//SAVE SERVICE IN DATABASE
			$team = new People();
			$team->fill($input);
			if ($team->save()) {
				return redirect('admin')->with('status', 'Сотрудник добавлен');
			}
    	}

    if (view()->exists('admin.people_add')) {
    	$data = [
    		'title' => 'Добавление нового сотрудника'
    	];
    	return view('admin.people_add', $data);
    }else{
    	return 'Страница не существует ошибка 404';
    }
    }
}
