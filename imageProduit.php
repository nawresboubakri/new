<?php
?>
<!--<script type="text/javascript">
	/*	var elm = $('#element').get(0);
		var lebar ="600";
		var tinggi ="400";
		var type ="png";
		var filename ="htmltoimage";
        html2canavas(elm).then(function);*/



	</script>-->
	<script type="text/javascript">
 $(document).ready(function () {
	 setTimeout(function(){
		 downloadImage();
	 },1000)
 });
 
 function downloadImage(){
	 html2canvas(document.querySelector("#container")).then(canvas => {
		a = document.createElement('a'); 
		document.body.appendChild(a); 
		a.download = "test.png"; 
		a.href =  canvas.toDataURL();
		a.click();
	});	 
 }
</script>
	

