=========================
Red Umbrella - Smart Time
=========================

# Application name

## Smart Time

* Smart = Our solution is smart
* Time = Our solution is meant to manage time in a productive way

# Team Members

* Marius-Constantin Postolache
* Adrian Cismas
* Daniela Zavelca

# Directories structure

* webui/ - the web interface of the application
* scripts/ - location of the python scripts used for reading the GPIO pins
* node_Server/ - location of the nodejs server used for the in app realtime notifications

# Installation instructions

<pre>
apt-get update
</pre>

## Asterisk PBX - installation and configuration

### Install Asterisk

<pre>
apt-get install asterisk
</pre>

### Configure the users

* in /etc/asterisk/sip.conf add this lines for two users, 101 and 102:

<pre>
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
</pre>

### Reload the sip configuration

<pre>
asterisk -rvvvvvv
sip reload
</pre>

### Add the context for the users

* in /etc/asterisk/extensions.conf add the dialplan for the added extenssions:

</pre>
[incoming]

exten => 101,1,Dial(SIP/101)
exten => 102,1,Dial(SIP/102)
</pre>

### Reload the dialplan

<pre>
asterisk -r
dialplan reload
</pre>

## Text to speach service - Festival

## Install Festival

<pre>
apt-get install festival
</pre>

### Example of generating the audio file from a text file:

<pre>
cat /tmp/tts.txt | text2wave -o /tmp/tts.ulaw -otype ulaw
</pre>

## Originate calls from the command line

<pre>
asterisk -rx "originate sip/101 extension 10@tts-message"
</pre>

and in extensions.conf:

<pre>
[tts-message]

exten => 10,1,Answer()
exten => 10,n,Playback(myfile)
exten => 10,n,Hangup()
</pre>

# Python component

<pre>
Location: scripts/get_sensor_Readings.py
</pre>

This script is used to read the sensor data into a file.
The analog sensors are connected to Raspberry PI via an ADC (Analog Digital Convertor) (MCP 3008). 
The readings from the sensors are stored into a text file. 


# Node.js Component

<pre>
Location: node_server/server.js
</pre>

## Introduction

This component is used for realtime notifications for the sensor readings.
For the realtime communication we are using websockets (socket.io)
We are using an event listener for the sensor reading txt file change event.

### Install node.js

<pre>
apt-get install nodejs
</pre>

### Install npm

<pre>
apt-get install nodejs npm
</pre>

### Install socket.io

<pre>
npm install socket.io
</pre>

# Hardware setup

* FSR (Force Sensitive Resistor) Brick Sensor connected to an ADC(MCP 3008) via a sensor sheild
* Raspberry PI

# Services to start

* Python script

<pre>
python /var/scripts/get_sensor_readings.py
</pre>

* NodeJS server

<pre>
nodejs /var/node_server/server.js
</pre>