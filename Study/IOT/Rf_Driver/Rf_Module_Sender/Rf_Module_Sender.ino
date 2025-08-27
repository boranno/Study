#include<RH_ASK.h>
#include<SPI.h>

RH_ASK rf_driver;


void setup() {
  // put your setup code here, to run once:
  rf_driver.init();
  Serial.begin(9600);

}

void loop() {
  uint8_t buff[11];
  uint8_t buflen =sizeoff(buf);

  if(rf_driver.recv(buf,&buflen))
  {
    Serial.println((char*)buf);
  }

}






