<html>
<body>
<b> GPIO CONTROL</b><br><br>

<form method="post">
OUTPUT1 CONTROL >>  
<input type="submit" name="OUT1ON" value="ON">  
<input type="submit" name="OUT1OFF" value="OFF"> <br><br>
OUTPUT2 CONTROL >> 
<input type="submit" name="OUT2ON" value="ON">  
<input type="submit" name="OUT2OFF" value="OFF"> <br><br>
</form>

<?php
	$OUT = array(12,16,20,21);	
	system("gpio -g mode ".$OUT[0]." out"); 
	system("gpio -g mode ".$OUT[1]." out"); 
	system("gpio -g mode ".$OUT[2]." out"); 
	system("gpio -g mode ".$OUT[3]." out"); 

	if (isset($_POST['OUT1ON'])){
				system("gpio -g write ".$OUT[0]." 1"); 	
		}
	if (isset($_POST['OUT1OFF'])){
				system("gpio -g write ".$OUT[0]." 0"); 	
		}	
	if (isset($_POST['OUT2ON'])){
				system("gpio -g write ".$OUT[1]." 1"); 	
		}
	if (isset($_POST['OUT2OFF'])){
				system("gpio -g write ".$OUT[1]." 0"); 	
		}			
?>

</body>
</html>	
	
	
		
	





