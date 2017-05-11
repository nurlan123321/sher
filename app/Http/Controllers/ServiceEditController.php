<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Validator;
class ServiceEditController extends Controller
{
    public function execute(Service $service ,Request $request){
    	//DELETE
    	if ($request->isMethod('delete')) {
    		$service->delete();
    		return redirect('admin')->with('status', 'Удалено');
    	}

    	//POST REQUEST
    	if ($request->isMethod('post')) {
    		$input = $request->except('_token');
    		$validator = Validator::make($input, [
    			'name' => 'required|max:255',
    			'text' => 'required'
			]);
			if ($validator->fails()) {
				return redirect()
				->route('serviceEdit', ['service'=>$input['id']])
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
			$service->fill($input);
			//teper update dannye
			if ($service->update()) {
				return redirect('admin')->with('status', 'Обновлено');
			}
    	}

    	//GET REQUEST
    	$old = $service->toArray();
    	if (view()->exists('admin.service_edit')) {
    		$data = [
    			'title' => 'Редактирование-'. $old['name'],
    			'data' => $old
    		];
    		return view('admin.service_edit', $data);
    	}
    }
}
