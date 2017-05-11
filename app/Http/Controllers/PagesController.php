<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PagesController extends Controller
{
    public function execute(){
    	if (view()->exists('admin.pages')) {
    		$pages = Page::all();
    		$data = [
    			'title' => 'Старницы',
    			'nameBtn' => 'Редактировать',
    			'pages' => $pages
    		];
    		
    		return view('admin.pages', $data);
    	}else{
    		return view('admin.404');
    	}
    }
}
