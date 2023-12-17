<?php
class ActivitiesAPI
{
    public function sendGetRequest($calories)
    {
        $url = "http://localhost:8081/calories-converter?calories={$calories}";

        $response = file_get_contents($url);

        return $response;
    }
}
