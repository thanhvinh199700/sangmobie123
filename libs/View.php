<?php
	class View {
		function __construct(){

		}
		public function view($name,$data=array()){
			require "views/".$name.".php";
		}
	} 
?>