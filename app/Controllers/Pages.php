<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index($pageNumber = 1)
	{


		$data = [
			'title' => 'Home | MangaIndo',
			'pageNumber' => $pageNumber
		];
		return view('pages/home', $data);
	}

	public function list()
	{
		$data = [
			'title' => 'Manga List | MangaIndo'
		];
		return view('pages/list', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | MangaIndo'
		];
		return view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact Us | MangaIndo'
		];
		return view('pages/contact', $data);
	}
}
