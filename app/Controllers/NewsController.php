<?php
// namespace App\NewsControllers;

// use App\Models\News;
class NewsController extends BaseController
{	

	public function index(){

		$this->view = View::make('/home')->withTitle('Welcome !');
	}
	public function home($value='')
	{
		// echo "this is home";
		$rows =  News::all();

		$this->view = View::make('/home')->with('data',$rows)->withTitle('Welcome !');
	}

	public function testredis(){
		Redis::set('key','test12aa09',5,'m');
		echo Redis::get('key');
	}
}