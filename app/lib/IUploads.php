<?php 

/**
* Class Untuk Upload Gambar
*/
class IUploads
{
	
	private $file_dir;
	private $filename;
	private $tmp_name;
	private $filesize;
	private $filetype;
	private $allow_type;
	private $uploadOK;
	private $width;
	private $height;
	private $rules;
	private $error;
	private $data = array();
	public function __construct($name,$rules = array())
	{
		$file = $_FILES[$name];
		$this->tmp_name = isset($file['tmp_name'])?$file['tmp_name']:'';
		$this->filename = isset($file['name'])?$file['name']:'';
		$this->filesize = isset($file['size'])?$file['size']:'';
		$this->rules 	= $rules;
		$dataImage = getimagesize($this->tmp_name);
		$this->width    = !empty($this->tmp_name)?$dataImage[0]:0;
		$this->height    = !empty($this->tmp_name)?$dataImage[1]:0;
		$this->file_dir = isset($rules['upload_folder'])?$rules['upload_folder']:null;
		$this->allow_type = isset($rules['allow_type'])?explode('|',$rules['allow_type']):null;

	}

	public function upload()
	{
		if (isset($_FILES)) {
			$this->checker();
			if ($this->uploadOK) {
				$fileNameHash = md5(date('Ymdhis').$this->filename).'.'.$this->getFileType();
				$this->data['nameHashed'] = $fileNameHash;
				$fileUploaded = $this->file_dir.$fileNameHash;
				$upload = move_uploaded_file($this->tmp_name, $fileUploaded)?true:false;
				$this->data['full_name']= $fileUploaded;
				return $upload;
			} else {
				return false;
			}
		} else {
			$this->error = 'File tidak ada';
			return false;
		}
	}

	private function checkFileType()
	{	
		if (!is_null($this->allow_type)) {
			
			if (in_array($this->getFileType(),$this->allow_type)) {
				// $this->uploadOK = true;
				return true;
			} else {
				// $this->uploadOK = false;
				// $this->error = 'Tipe File Tidak Cocok';
				return false;
			}

		} else {
			return true;
		}
	}

	private function checkMaxResolution()
	{
		$width = $this->width;
		$height = $this->height;
		if (isset($this->rules['max_width']) && isset($this->rules['max_height'])) {
			
			$max_width = $this->rules['max_width'];
			$max_height = $this->rules['max_height'];

			if ($width > $max_width || $height > $max_height) {
				return false;
				// $this->uploadOK = false;
				// $this->error =  'Ukuran gambar terlalu besar ukuran yang di ijinkan '.$max_width.' x '.$max_height;
			} else {
				return true;
				// $this->uploadOK = true;
			}
		}else{
			return true;
		}
	}

	private function checkMinResolution()
	{
		$width = $this->width;
		$height = $this->height;
		if (isset($this->rules['min_width']) && isset($this->rules['min_height'])) {
			
			$min_width = $this->rules['min_width'];
			$min_height = $this->rules['min_height'];

			if ($width > $min_width || $height > $min_height) {
				return false;
				// $this->uploadOK = false;
				// $this->error =  'Ukuran gambar minimal '.$min_width.' x '.$min_height;
			} else {
				return true;
				// $this->uploadOK = true;
			}
		}else{
			return true;
		}
	}

	private function checkFileSize()
	{
		$size = $this->filesize;
		if (isset($this->rules['max_size'])) {
			
			$max_size = $this->rules['max_size'] * 1000;
			if ($size > $max_size) {
				return false;
				// $this->uploadOK = false;
				// $this->error = 'File Terlalu Besar';
			} else {
				return true;
				// $this->uploadOK = true;
			}

		} else {
			return true;
		}
	}

	private function getFileType()
	{
		return pathinfo($this->filename,PATHINFO_EXTENSION);
	}

	private function checker()
	{
		if ($this->checkFileType() == false) {
			$this->error = 'Tipe File Tidak Cocok';		
		} else if ($this->checkFileSize() == false) {
			$this->error = 'File Terlalu Besar';
		}else if($this->checkMaxResolution() == false){
			$max_width = $this->rules['max_width'];
			$max_height = $this->rules['max_height'];
			$this->error =  'Ukuran gambar terlalu besar ukuran yang di ijinkan '.$max_width.' x '.$max_height;
		}else if ($this->checkMinResolution() == false) {
			$min_width = $this->rules['min_width'];
			$min_height = $this->rules['min_height'];
			$this->error =  'Ukuran gambar minimal '.$min_width.' x '.$min_height;
		}else{
			$this->uploadOK = true;
		}
	}

	public function data()
	{
		$this->data['filename'] = $this->filename;
		$this->data['filesize'] = $this->filesize;
		$this->data['file_width'] = $this->width;
		$this->data['file_height'] = $this->height;
		return $this->data;
	}

	public function uploadError()
	{
		return $this->error;
	}
}