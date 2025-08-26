int trigpin = 13, echopin = 8;
float distance,duration;


void setup() {
  Serial.begin(9600);
  
  pinMode(trigpin, OUTPUT);
  pinMode(echopin, INPUT);

}

void loop() {
  digitalWrite(trigpin, LOW);
  delayMicroseconds(5);
  digitalWrite(trigpin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigpin,LOW);
  duration = pulseIn(echopin,HIGH);
  distance = (duration*.034)/2.0;
  Serial.print("Distance : ");
  Serial.println(distance);
  delay(500);
}
