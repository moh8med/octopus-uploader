<?php namespace Moh8med\Uploader;

// use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\View;

use Moh8med\Uploader\UploaderInterface;
// use Illuminate\Http\Request;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as FilesystemAdapter;

echo 'Uploader loaded <br><br>';

class Uploader implements UploaderInterface {

	private $request;

	private $file;

	public function __construct()
	{
		$this->request = new Request;

		$this->filesystem = new Filesystem(new FilesystemAdapter(config('app.upload_directory')));

		// Load helpers
		require_once __DIR__.'/helpers.php';

		echo 'initialized <br> <br>';
	}

	public function upload($name)
	{
		// Verifying the file
		if (! Request::hasFile($name) || ! Request::file($name)->isValid()) {
			return false;
		}

		$this->file = Request::file($name);

		// $this->filesystem->put('docs/file_12_thumb.txt', 'file contents', ['visibility' => 'private']);

		var_dump($this->filesystem->has('docs/file_12_thumb.txt'));
		// var_dump($this->filesystem->delete('docs/file_12_thumb.txt'));
	}

	public function createThumbnails()
	{

	}

	private function cleanOtherExtensions()
	{

	}

}