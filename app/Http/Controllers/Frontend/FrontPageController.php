<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //
	public function home () {
		return view('frontend.pages.home');
	}

	public function contact () {
		return view('frontend.pages.contact');
	}

	public function categoryPost () {
		return view('frontend.pages.category_post');
	}

	public function postDetails () {
		return view('frontend.pages.post');
	}


}
