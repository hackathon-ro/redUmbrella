=========================
Red Umbrella - Smart Time
=========================

I. Directories structure
-----------------------------

A. webui/ - the web interface of the application
B. scripts/ - location of the python scripts used for reading the GPIO pins
C. node_Server/ - location of the nodejs server used for the in app realtime notifications

II. Installation instructions
-----------------------------

apt-get update


A. Asterisk PBX - installation and configuration

1. Install

apt-get install asterisk

2. Configure the users

- in /etc/asterisk/sip.conf add this lines for two users, 101 and 102:

[101]

type=friend

host=dynamic

secret=qwe123

disallow=all

allow=ulaw

context=incoming

[102]

type=friend

host=dynamic

secret=qwe123

disallow=all

allow=ulaw

context=incoming

3. Reload the sip configuration

asterisk -r

sip reload

4. Add the context for the users

- in /etc/asterisk/extensions.conf add the dialplan for the added extenssions:

[incoming]

exten => 101,1,Dial(SIP/101)

exten => 102,1,Dial(SIP/102)

5. Reload the dialplan

asterisk -r

dialplan reload

B. Text to speach service - Festival

1. Install

apt-get install festival

2. Example of generating the audio file from a text file:

cat /tmp/tts.txt | text2wave -o /tmp/tts.ulaw -otype ulaw

B. Originate calls from the command line

asterisk -rx "originate sip/101 extension 10@tts-message"

and in extensions.conf:

[tts-message]

exten => 10,1,Answer()

exten => 10,n,Playback(myfile)

exten => 10,n,Hangup()

III Python component
---------------------
Location: scripts/get_sensor_Readings.py

This script is used to read the sensor data into a file.
The analog sensors are connected to Raspberry PI via an ADC(MCP 3008). 
The readings from the sensors are stored into a text file. 



IV Node.js Component
--------------------------
Location: node_server/server.js

Intro.
This component is used for realtime notifications for the sensor readings.
For the realtime communication we are using webscokets (socket.io)
We are using an event listener for the sensor reading txt file change event.

1.Install node.js
apt-get install nodejs

2.Install npm
apt-get install nodejs npm

3.Install socket.io
npm install socket.io

V Hardware setup
-----------------
- FSR (Force Sensitive Resistor) Brick Sensor connected to an ADC(MCP 3008) via a sensor sheild
- Raspberry PI
