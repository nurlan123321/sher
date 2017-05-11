<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use App\Menu;
use App\About;
use Mail;


class IndexController extends Controller
{
    public function execute(Request $request){

    	// proveryaem deistvitelno li my otpravlyaem metohod post
    	if($request->isMethod('post')){
    		//validate
    		$messages = [
    			'required' => "Поле :attribute обьязательно к заполнению",
    			'mail' => "Поле :attribute должно соответствовать email адресу",
    		];
    		$this->validate($request, [
    			'name' => 'required|max:255',
    			'mail' => 'required|email',
    			'text' => 'required'
			], $messages);
			
    		$data = $request->all(); //eto dannye iz formy
			//mail
    		$result = Mail::send('site.email', ['data' => $data], function($message) use ($data){
    			$mail_admin = env('MAIL_ADMIN');
    			$message->from($data['mail'], $data['name']); // zdes govorim ot kogo otpravlyautsay dannye i napisali imena formy
    			$message->to($mail_admin)->subject('Question');// zdes kuda otpravlyautsya dannye na kakoi email
    		});

    		if ($result) {
    			return redirect()->route('home')->with('status', 'Email is Send');
    		}
    	}

    	$pages = Page::all();
    	$portfolios = Portfolio::get(array('name', 'filter', 'img'));
    	$services = Service::where('id', '<', 20)->get();
    	$peoples = People::take(6)->get();
		$menu = Menu::all();
		$about = About::all();
		
        $meta = [
            'title' => 'Услуги сантехника в бишкеке'
        ];
		
    	
    
    	return view('site.content', array(
    		'menu' => $menu, 
    		'pages' => $pages,
    		'services' => $services,
    		'portfolios' => $portfolios,
    		'peoples' => $peoples,
    		'about' => $about,
            'meta' => $meta
    		
		));
    }
}
