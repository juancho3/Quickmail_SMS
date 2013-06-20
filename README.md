Quickmail_SMS
=============

Moodle 2.x plugin which provides a SMS gateway in juntion with "SMS Gateway" (an Android app)


Installation procedure
----------------------

1) Required: Prior to installation you need a mail account with POP3 (non-SSL) to work.

2) Download this repository as a "ZIP" file from toolbar.

3) Install ZIP file as a new "Block" plugin into your Moodle 2.x.
   Configure the email address at first point where SMS messages will be delivered.

4) Install an Android app called "SMS Gateway" (from APK Soft s.r.o.)
   Configure following options at 'Settings':

   - Listen for POP3 send SMS commands
   - Prevent CPU sleep mode
   - Start gateway automatically after phone boot.

5) If you can obtain a SIM from your favourite provider with infinite SMS, then you a have a free SMS gateway.


Hints
-----

- There is a programatically limitation to avoid sending messages out of Spain and to non-mobile phone:
  File "email.php" at lines 321 and 326:

  >>>  if (!empty($phone1) and strlen($phone1)==9 and $phone1{0}=='6' ) {  <<<

  These lines checks a phone number with 9 digits and starting with a 6 digit.
  Please modify these lines to allow sending SMS mails to any number.

- Only Spanish / English languages files are full supported.


Nice SMS/Email mailing !!!

Juancho.
