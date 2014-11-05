<?php
	class PagesController extends BaseController {

		public function home()
		{

			$name="Shirin3";
			return View::make('hello')->with('name',$name);
		}
		public function about()
		{

			$name="ShirinAbout";
			return View::make('about')->with('name',$name);
		}
		
		
	}