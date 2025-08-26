#include<SoftwareSerial.h>



SoftwareSerial myserial(10,11);


void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  myserial.begin(9600);

}

void loop() {
  

  if(Serial.available())
  {
    myserial.write(Serial.read());

  }

  if(myserial.available())
  {
    Serial.write(myserial.read());

  }
  delay(20);

}
