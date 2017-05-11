<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;
class PagesEditController extends Controller
{
    public function execute(Page $page, Request $request){
    	//POST REQUEST
    	if ($request->isMethod('post')) {
    		$input = $request->except('_token');
    		$validator = Validator::make($input, [
    			'name' => 'required|max:255',
    			'owka' => 'required|max:50',
    			'megacom' => 'required|max:50',
    			'billain' => 'required|max:50',
			]);
			if ($validator->fails()) {
				return redirect()
				->route('pagesEdit', ['page'=>$input['id']])
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
			$page->fill($input);
			//teper update dannye
			if ($page->update()) {
				return redirect('admin')->with('status', 'Обновлено');
			}
    	}

    	//GET REQUEST
    	$page = $page->toArray();
    	if (view()->exists('admin.page_edit')) {
    		$data = [
    			'title' => 'Редактирование-'. $page['name'],
    			'data' => $page
    		];
    		return view('admin.page_edit', $data);
    	}
    }
}
