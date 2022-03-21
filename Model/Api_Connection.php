<?php
class Api_Connection
{
    public static function api_connect($id)
    {
        try {
            
            $endpoint_url = __WEATHER_URL . $id . "&APPID=" . API_KEY;

        } catch (\PDOEXCEPTION$th) {
        
            echo $th->getMessage("Sorry, there is a problem with this webservice");
        }    
        
        $ch = curl_init($endpoint_url);     
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
?>