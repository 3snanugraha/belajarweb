<!DOCTYPE html>
<html>
<body>
<center>
<?php
	function intro(){
		echo"<h2 align='center'> Belajar PHP </h2>";
		$nama="Tris";
		echo"<h4 align='center'> Nama Saya $nama </h4>";	
	}
	
	function aritmatika(){
			$y =5; echo "5 + 1 = ";
			$x =1;
			$h = $x + $y;
			echo "$h";
	}
	
	function ifelse(){
		$nilai=85;
		if($nilai>=85 and $nilai<=100){
			echo"<br>Grade = A";
		}else if($nilai>=75 and $nilai<=84){
			echo"<br>Anda tidak Lulus";
		}else if($nilai>=65 and $nilai<=74){
			echo"<br>Anda tidak Lulus";
		}else if($nilai>=55 and $nilai<=64){
			echo"<br>Anda tidak Lulus";
		}else{
			echo"<br>Anda tidak Lulus";
		}
	}
	
	function pengulangan(){
		for($x=1;$x<=100;$x++){
			echo "<br>Pengulangan ke <b>$x</b>";
		}
	}
	
	
	intro();
	aritmatika();
	ifelse();
	pengulangan();
?>
</center>
</body>
</html>