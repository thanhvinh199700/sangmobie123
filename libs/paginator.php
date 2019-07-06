<?php 
	/**
	 * 
	 */
	class Paginator
	{
		
		var $base_url   ='';
		var $total_rows = 0;
		var $per_page = 8;

		var $cur_page =0;


		public function __construct($params = array()){
			if(count($params)>0){
				$this->init($params);
			}
		}


		public function init($params = array()){
			if(count($params)>0){
				foreach ($params as $key => $val) {
					if(isset($this->$key)){
						$this->key = $val;
					}
				}
			}
			return $this->$total_rows;
		}
		public function createLinks_allproducts(){
			$end=cell($this->total_rows / $this->per_page);
			$start = 1;
			$html = "<ul class = 'paginator'>";
			$class = ($this->cur_page ==1)? "disable":"";
			$html .="<li><a class='".$class."' href'".$this->$base_url.($this->cur_page-1)."'><span>&laquo;</span></a></li>";
			for($i=$start;$i<=$end;$i++)
			{
				$class=($this->cur_page==$i)?"active":"";
				$html.="<li><a class='" .$class."' href='".$this->base_url.$i."'>".$i."</a><li>";
			} 

			$class=($this->cur_page ==$end)?"disable":"";
			$html .="<li><a class='".$class."' href'".$this->$base_url.($this->cur_page+1)."'><span>&laquo;</span></a></li>";
			return $html;
		}





	}

	?>