<?php

require_once('vendor/autoload.php'); // Loads the library
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class Twilio_Auth
{
    protected $accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
    protected $apiKeySid = 'SKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
    protected $apiKeySecret = 'BcXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';

    public function get_twilio_token($identity, $roomName)
    {
        // Create an Access Token
        $token = new AccessToken(
            $this->accountSid,
            $this->apiKeySid,
            $this->apiKeySecret,
            3600,
            $identity
        );

        // Grant access to Video
        $grant = new VideoGrant();
        $grant->setRoom($roomName);
        $token->addGrant($grant);

        // Serialize the token as a JWT
        return $token->toJWT();
    }
}
