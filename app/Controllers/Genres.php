<?php

namespace App\Controllers;

class Genres extends BaseController
{

	public function detail($endpoint, $pageGenre = 1)
	{

		$data = [
			'title' => "Kategori Manga | MangaIndo",
			'endpoint' => $endpoint,
			'pageGenre' => $pageGenre
		];
		return view('genres/genreList', $data);
	}
}
