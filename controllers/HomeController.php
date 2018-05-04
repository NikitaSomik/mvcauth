<?php 

class HomeController extends Controller
{

		function __construct()
		{
			//echo __CLASS__;// волшебная константа
		}

		function index()
		{
			//echo __METHOD__;
			$data['title'] = 'Main Page';
			$data['content'] = 'Enter your text!';
			View::render('home/index', $data);// передали её в вид

		}

		function contact()
		{
			//echo __METHOD__;
			$data['title']= 'Contact';
			$data['content']= 'Lorem ipsum dolor.';
			View::render('home/contact', 'Contact');
		}
		
		
}