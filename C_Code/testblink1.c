#include "stdio.h"
#include "wiringPi.h"

int led = 21;

int main (void){
	printf("Testblink1 Running\n");
	wiringPiSetupGpio(); // Initialize wiringPi -- BCM pin number
	pinMode(led,OUTPUT);
	while(1){
		digitalWrite(led,HIGH);
		delay(1000);
		digitalWrite(led,LOW);
		delay(1000);
	}
}

