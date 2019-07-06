<?php 
echo "<p>".$data['error']."</p>";
echo "<p><a href='javascript:void(0);' onclick='goBack();'>Back</a></p>";

?> 
<script type="text/javascript">
	function goBack(){
		window.history.back();
	}
</script>