<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Service;
class ServiceAddController extends Controller
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
			$service = new Service();
			$service->fill($input);
			if ($service->save()) {
				return redirect('admin')->with('status', 'Услуга добавлена');
			}
    	}

    if (view()->exists('admin.service_add')) {
    	$data = [
    		'title' => 'Добавление новой записи'
    	];
    	return view('admin.service_add', $data);
    }else{
    	return view('admin.404');
    }
    }
}
