<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\People;

class TeamEditController extends Controller
{
  public function execute(People $team,Request $request){
  	

    	//DELETE
    	if ($request->isMethod('delete')) {
    		$team->delete();
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
				->route('teamEdit', ['team'=>$input['id']])
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
			$team->fill($input);
			//teper update dannye
			if ($team->update()) {
				return redirect('admin')->with('status', 'Обновлено');
			}
    	}

    	//GET REQUEST
    	$team = $team->toArray(); //prevrawaem nawu vnedrennuu zavisimost v array
    	if (view()->exists('admin.people_edit')) {
    		$data = [
    			'title' => 'Редактирование-'.$team['name'],
    			'data' => $team
    		];
    		return view('admin.people_edit', $data);
    	}
    }
}
