#include<SPI.h>
#include<LoRa.h>


void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  while(!Serial);


  if(!LoRa.begin(433E6))
  {
    Serial.println("Lora starting failed");
    while(1);

  }

}

void loop() {
  int packetSize = LoRa.parsePacket();
  if(packetSize)
  {
    String massage="";
    while(!LoRa.available())
    {
      char singlechar = (char)LoRa.read();
      massage+=singlechar;
    }
    Serial.println(massage);
  }
}






