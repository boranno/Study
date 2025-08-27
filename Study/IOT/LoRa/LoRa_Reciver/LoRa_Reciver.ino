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
   LoRa.beginPacket();
   LoRa.print("Hi this is Boranno Golder");
   LoRa.endPacket();
}











