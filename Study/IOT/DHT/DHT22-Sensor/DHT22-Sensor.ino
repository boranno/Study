#include <DHT.h>

int dhtpin =  8;

DHT dht(dhtpin,DHT22);



void setup() {
  Serial.begin(9600);
  dht.begin();

}

void loop() {
  float temp = dht.readTemperature();
  float hum = dht.readHumidity();
  Serial.print("Tempreature : ");
  Serial.print(temp);
  Serial.print(" Humidity : ");
  Serial.println(hum);
  delay(500);

}
