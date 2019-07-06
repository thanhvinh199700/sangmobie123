function changeStatus(t,obj,id){
	f = parseInt($(obj).attr("data"));
	$.ajax({
		url: 'index.php/'+t+'/'+ 'changeStatus/'+id,
		type: "post",


		data: {status: f, pid: id}})

	.done(
		function(result){


			
			if(f==0){
				$(obj).attr("src","public/images/200.jpg");

			}
			else{
				$(obj).attr("src","public/images/100.png");
			}
			f= 1-f;
			$(obj).attr("data",f);
		});

}