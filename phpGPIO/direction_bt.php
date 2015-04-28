<html>
<body>
<b> Direction Control </b><br><br>

<form method="post">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="UP" value="UP">  <br><br>
<input type="submit" name="LEFT" value="LEFT">  
<input type="submit" name="STOP" value="STOP">  
<input type="submit" name="RIGHT" value="RIGHT"> <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="BACK" value="BACK">  

</form>

<?php
	$OUT = array(12,16,20,21);	
	system("gpio -g mode ".$OUT[0]." out"); 
	system("gpio -g mode ".$OUT[1]." out"); 
	system("gpio -g mode ".$OUT[2]." out"); 
	system("gpio -g mode ".$OUT[3]." out"); 

	if (isset($_POST['UP'])){
				system("gpio -g write ".$OUT[0]." 1"); 	
				system("gpio -g write ".$OUT[1]." 0"); 	
				system("gpio -g write ".$OUT[2]." 1"); 	
				system("gpio -g write ".$OUT[3]." 0"); 					
		}
	if (isset($_POST['BACK'])){
				system("gpio -g write ".$OUT[0]." 0"); 	
				system("gpio -g write ".$OUT[1]." 1"); 	
				system("gpio -g write ".$OUT[2]." 0"); 	
				system("gpio -g write ".$OUT[3]." 1"); 	
		}	
	if (isset($_POST['LEFT'])){
				system("gpio -g write ".$OUT[0]." 0"); 	
				system("gpio -g write ".$OUT[1]." 0"); 	
				system("gpio -g write ".$OUT[2]." 1"); 	
				system("gpio -g write ".$OUT[3]." 0"); 	
		}
	if (isset($_POST['RIGHT'])){
				system("gpio -g write ".$OUT[0]." 1"); 	
				system("gpio -g write ".$OUT[1]." 0"); 	
				system("gpio -g write ".$OUT[2]." 0"); 	
				system("gpio -g write ".$OUT[3]." 0"); 		
		}
	if (isset($_POST['STOP'])){
				system("gpio -g write ".$OUT[0]." 0"); 	
				system("gpio -g write ".$OUT[1]." 0"); 	
				system("gpio -g write ".$OUT[2]." 0"); 	
				system("gpio -g write ".$OUT[3]." 0"); 	
		}

?>

</body>
</html>	
	
	
		
	





