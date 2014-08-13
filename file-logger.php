<?php
	class File_Logger{
		private $filename;
		
		public function __construct($filename){
			$this->filename = $filename;
		}
		
		public function write($data){
			file_put_contents($this->filename, $data, FILE_APPEND | LOCK_EX);
		}
	}
?>