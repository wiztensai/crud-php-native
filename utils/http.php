<?php

function fetch($url){

    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_URL, $url);
    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    $output = curl_exec($ch); 

    curl_close($ch);      

    return $output;
}

function fetch_decode($url){

    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_URL, $url);
    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    $output = curl_exec($ch); 

    curl_close($ch);      

    return json_decode($output);
}

function get_content($url) {
    $result = json_encode(file_get_contents($url));
    return json_decode($result);
}

function post_decode($url, $body) {
    // set post fields
    // $post = [
    //     'username' => 'user1',
    //     'password' => 'passuser1',
    //     'gender'   => 1,
    // ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    return json_decode($response);
}

?>