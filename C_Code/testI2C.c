#include "stdio.h"
#include "wiringPi.h"
#include "wiringPiI2C.h"

int pcf_add = 0x48;
int fd;
int LDR_ch   = 0x40;
int THER_ch  = 0x41;
int POTEN_ch = 0x43;

int adc_read(){
	int adc;
	wiringPiI2CWrite(fd,THER_ch);
	adc = wiringPiI2CRead(fd);
	adc = wiringPiI2CRead(fd);
	return adc;
	}

int main(void){
		system("gpio load i2c");
		wiringPiSetupGpio();
		if ((fd = wiringPiI2CSetup(pcf_add))<0){
			printf("Unable to Open I2C Device\n");
		}else{
			printf("Open I2C Device Successfully");
			}
		while(1){
			int adc_value = adc_read();
			printf("value = %d\n",adc_value);
			}
}


