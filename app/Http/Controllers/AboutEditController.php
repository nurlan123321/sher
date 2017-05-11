<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Validator;
class AboutEditController extends Controller
{
    public function execute(About $about, Request $request){
    	//POST REQUEST
    	if ($request->isMethod('post')) {
    		$input = $request->except('_token');
    		$validator = Validator::make($input,     			
    			'title' => 'required|max:255',
    			'text' => 'required'
			]);
			if ($validator->fails()) {
				return redirect()
				->route('aboutEdit', ['about'=>$input['id']])
				->withErrors($validator);
			}
			//proveryaem esli polzovatel rewil zagruzit new image
			if ($request->hasFile('images')) {
				$file = $request->file('images');
				$file->move(public_path() . '/img', $file->getClientOriginalName());
				$input['images'] = $file->getClientOriginalName();
			}else{
				$input['images'] = $input['old_images'];//ina4e ostavlyaem old image
			}
			unset($input['old_images']);// udalyaem iz massiva old_image iz inputa
			$about->fill($input);
			//teper update dannye
			if ($about->update()) {
				return redirect('admin')->with('status', 'Обновлено');
			}
    	}

    	//GET REQUEST
    	$about = $about->toArray();
    	if (view()->exists('admin.about_edit')) {
    		$data = [
    			'title' => 'Редактирование',
    			'data' => $about
    		];
    		return view('admin.about_edit', $data);
    	}else{
    		return 'Страница не существует ошибка 404';
    	}
    }
}
