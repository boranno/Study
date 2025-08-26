
int motionpin=7,relaypin=8;


void setup() {
  pinMode(motionpin,INPUT);
  pinMode(relaypin,OUTPUT);

}

void loop() {
  
  if(digitalRead(motionpin))
  {
    digitalWrite(relaypin,HIGH);
  }
  else{
      digitalWrite(relaypin,LOW);
  }
  delay(500);

}
