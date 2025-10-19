#include<LoRa.h>
#include<SPI.h>



SoftwareSerial sim8000(10,11);

void setup()
{
  
  .begin();

}
void loop()
{
  sim800.print("AT+CMGF=1");
  delay(500);
  sim800.print("AT+CMGS=/"01663633/");
  delay(500);
  sim800.print("Hi this is boranno golder");
  delay(500);
  sim800.print(26);
}





