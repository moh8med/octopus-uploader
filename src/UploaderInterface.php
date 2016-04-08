<?php namespace Moh8med\Uploader;

interface UploaderInterface
{
	public function upload($name);

	public function createThumbnails();
}