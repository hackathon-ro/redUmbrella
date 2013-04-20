=========================
Red Umbrella - Smart Time
=========================

I. Directories structure
-----------------------------

A. webui/ - 

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
asterisk -rx "originate sip/101 extension 101@incoming"