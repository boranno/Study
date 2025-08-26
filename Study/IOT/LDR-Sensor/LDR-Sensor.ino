int ldrPin = A0,ledpin = 13;

void setup()
{
  Serial.begin(9600);
  pinMode(ledpin, OUTPUT);
}

void loop()
{
  int ldrvalue = analogRead(ldrPin);
  int brightness = map(ldrvalue,344,1017,0,255);
  analogWrite(brightness);
  delay(1000);
  
}