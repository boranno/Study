#include<SoftwareSerial.h>



SoftwareSerial sim(10,11);


void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  sim.begin(9600);
  delay(1000);

}

void loop() {
  smssend("01325357537","Hello From Boranno Golder");
  delay(20);

}

void smssend(String phonenumber,String massage)
{
  sim.print("AT+CMGF=1");
  delay(500);
  sim.print("AT+CMGS=\"" +phonenumber+"\"");
  delay(500);
  sim.print(massage);
  delay(500);
  sim.write(26);
  delay(500);
}





