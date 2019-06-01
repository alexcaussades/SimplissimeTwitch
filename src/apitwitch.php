<?php
namespace SimplissimeTwitch;


    /**
     * Développeur Alexcaussades
     * Classe for website
     * information on the stream
     * Contact alexcaussades@gmail.com
     */

    use \GuzzleHttp\Client;
    use \GuzzleHttp\Psr7\Request;
    use \GuzzleHttp\Exception\RequestException;
    use \GuzzleHttp\Middleware;

class ApiTwitch 
{
     /** Information à modifier */
     const Streamer_Name = 'Name_Streamer'; //Remplacer la valeur
     const Api_Twitch_ID = 'Api_Id_Twitch'; //Remplacer la valeur
     const USER_ID_TWITCH = 'Id_Twitch'; //Remplacer la valeur
     

     /** Ne pas Modifier */
     const urlDiscord = 'https://discordapp.com/api/guilds/';
     const widjetDiscord = 'widget.json';
     const URL_API_TWITCH = 'https://api.twitch.tv/kraken/channels/';
     const Clip_Video = "https://api.twitch.tv/kraken/clips/top?channel=";
     const urlFollow = '/follows';
     const urlTeam = '/teams';

    /**
     * __construct
     *
     * @param  mixed $uriBase
     * @param  mixed $client_id
     * @param  mixed $clientName
     *
     * @return void
     */
    
    public function __construct()
    {  
        $this->clientId = '?client_id='.self::Api_Twitch_ID.'';
        $this->uriBase = self::URL_API_TWITCH;
        $this->clientName = self::Streamer_Name; 
        $this->urlTeam = self::urlTeam;
        $this->urlFollow = self::urlFollow;
        
    }
    
    /**
     * getUsers
     *
     * @param  mixed $value
     *
     * @return void
     */

    public function getUsers($value)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->uriBase.''.$this->clientName.''.$this->clientId);
        $res = $res->getBody();
        $json = json_decode($res, true);
        echo $json[''.$value.'']; 
    }

    /**
     * getStatus
     *
     * @return void
     */

    public function getStatus()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->uriBase.''.$this->clientName.''.$this->clientId);
        $res = $res->getBody();
        $json = json_decode($res, true);
        echo $json['status']; 
    }

    /**
     * getGame
     *
     * @return void
     */
    public function getGame()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->uriBase.''.$this->clientName.''.$this->clientId);
        $res = $res->getBody();
        $json = json_decode($res, true);
        echo $json['game']; 
    }

    /**
     * getUsers2Valeur
     *
     * @param  mixed $value1
     * @param  mixed $value2
     *
     * @return void
     */
    
    public function getUsers2Valeur($value1, $value2)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->uriBase.''.$this->clientName.''.$this->clientId);
        $res = $res->getBody();
        $json = json_decode($res, true);
        echo $json[''.$value1.''][''.$value2.''];
    }

    /**
     * follow
     *
     * @param  mixed $value1
     *
     * @return void
     */

    public function follow($value1)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->uriBase.''.$this->clientName.''.$this->urlFollow.''.$this->clientId);
        $res = $res->getBody();
        $json = json_decode($res, true);
        echo $json[''.$value1.''];

    }

    
    /**
     * followListe
     *
     * @param return liste followers X25  
     * @return void
     */

    public function followListe()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->uriBase.''.$this->clientName.''.$this->urlFollow.''.$this->clientId);
        $res = $res->getBody();
        $json = json_decode($res, true);
        foreach ($json['follows'] as $follow){
            echo '<li>'. $follow['user']['display_name'].'</li>';
        }
    }

}
