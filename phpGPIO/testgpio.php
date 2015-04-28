	
<?php
	$OUT = array(12,16,20,21);	
	system("gpio -g mode ".$OUT[0]." out"); 
	system("gpio -g mode ".$OUT[1]." out"); 
	system("gpio -g mode ".$OUT[2]." out"); 
	system("gpio -g mode ".$OUT[3]." out"); 	
	for ($i = 0 ; $i < 4 ; $i++){
			system("gpio -g write ".$OUT[$i]." 1"); 
			system("sleep 1");
			system("gpio -g write ".$OUT[$i]." 0"); 
			system("sleep 1");
		}
	printf("Test GPIO via php");
?>





