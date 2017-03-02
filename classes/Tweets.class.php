<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/1/2017
 * Time: 7:26 AM
 */

require_once 'core/init.php';

require_once 'api/TwitterAPIExchange.php';

class Tweets
{


    private static $_db;
    /*
    *Dobavljanje REST API, twiter b92 vesti
    */
    public function getRest()
    {
        $settings = array(
            'oauth_access_token' => "835748131526569984-pgNOVptDkALsRnz3MTXWHZOITfTdqWG",
            'oauth_access_token_secret' => "uaNMNzdVxcdazCX1jHliOjcgdsDMkUSYOpr9z31uBIYLh",
            'consumer_key' => "lQr0jYsFzbh9yzYXAi5PpZes5",
            'consumer_secret' => "Sb8DtpAuxIBR3tHfSZpRoS69Rmvdzhruv0sT2HCpzpH4WzabcZ"
        );

        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        $getfield = '?screen_name=@b92vesti&count=9';


        $twitter = new TwitterAPIExchange($settings);

        $response = $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        //
        return $tweets =  json_decode($response,true);
    }
     /*
     *Zapisivanje dobavljenih podataka u bazu, REST api Twiter B92 vesti
     */
    public function createRest()
    {

        $stmt = self::$_db->prepare("INSERT INTO news (id,news,descript,link,img,url,created_at) VALUES (null,?,?,?,?,?,?)");
        foreach ($this->getRest() as $news){
            /*
            *text sadrzi opis vesti i link ka celoj vesti
            */
            $text = explode('http',$news['text']);
            /*
            *u nizu na poziciji [0] je opis
            */
            $descrip = $text[0];

           if(isset($text[1])){
               /*
               *u nizu na poziciji [1] je link
               *ako link postoji, upisuje se u bazu
               */
               $link = 'http'.$text[1];
           }

            $stmt->bindParam(1,$news['user']['name']);
            $stmt->bindParam(2,$descrip);
            $stmt->bindParam(3,$link);
            $stmt->bindParam(4,$news['entities']['media'][0]['media_url']);
            $stmt->bindParam(5,$news["user"]["url"]);
            $stmt->bindParam(6,$news['created_at']);
            $stmt->execute();
        }
    }
     /*
     *inicijalizacija konekcije sa bazom
     */
    public static function init()
    {
        self::$_db = Conn::getInstance();
    }
}

Tweets::init();