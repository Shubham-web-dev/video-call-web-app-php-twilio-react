# OOPS Based PHP Video Call App using Twilio API and Twilio React App
This is an example to setup Twilio Programmable Video to cretae you own video calling website, in just few steps.

## Pre-requisites
1. Twilio Account api key Created
2. Hosting with domain and SSL enabled.
3. PHP 5.6+ Environment.

## How to Create API key.
1. Create Account on https://www.twilio.com/
2. Go to Settings -> Api Keys and Create Master API key (make sure to copy to a file.)

## Set up your app.
1. Go to /Classes Open Twilio.php
2. Enter your AccountSID, Api key and SECRET Key.
3. Open get_token.php in root of the app.
4. Replace your domain on line no 17.
5. Upload code to www or public_html of your domain (make sure your app stays in root folder of domain.)
6. Volaaaa! Your app is ready to be used!


## Some points to note:
1. This app uses a production build of [twilio-app](https://github.com/twilio/twilio-video-app-react).
2. The app does not work on non-ssl domain.


Created by: Shubham Sakharkar
Contact: shubhamrsakharkar@gmail.com
