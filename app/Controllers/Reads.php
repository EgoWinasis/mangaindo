<?php

namespace App\Controllers;

class Reads extends BaseController
{
	public function index($manga)
	{

		$data = [
			'title' => 'Detail Manga | MangaIndo',
			'manga' => $manga
		];
		return view('reads/detailManga', $data);
	}

	public function read($endpoint)
	{

		$data = [
			'title' => "Baca Manga | MangaIndo",
			'endpoint' => $endpoint
		];
		return view('reads/bacaChapter', $data);
	}
}
