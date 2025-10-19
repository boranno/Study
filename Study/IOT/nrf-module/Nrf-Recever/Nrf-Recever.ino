 
 #include <SPI.h>
 #include <nRF24L01.h>
 #include <RF24.h>
 
 RF24 radio(9, 8);
 
 const byte address[6] = "00001";

 void setup() {
  Serial.begin(9600);

 radio.begin();

 radio.openReadingPipe(address,0);
 
 radio.startListening();
 }
 void loop() {
 

 
 if(radio.available())
  {
    const char text[] = {0};
    radio.read(&text,sizeof(text));
    Serial.println(text);

  }
 delay(1000);
 
 }



