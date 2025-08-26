#include <Servo.h>

Servo amarservo;


int trigpin = 13, echopin = 8;
float distance,duration;


void setup() {
  Serial.begin(9600);
  amarservo.attach(10);
  
  pinMode(trigpin, OUTPUT);
  pinMode(echopin, INPUT);

  amarservo.write(0);

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

  int servoDegree = map(distance,0,400,0,180);
  amarservo.write(servoDegree);

  delay(500);
}
