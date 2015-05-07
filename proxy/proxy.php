<?php
    header('content-type: application/json; charset=utf-8');
    header('access-control-allow-origin: *');

    $querySearchedTerm = $_GET['q'];
    $queryPage = $_GET['p'];
    $clientIP = getenv('REMOTE_ADDR');
    if(isset($queryPage))
        $url = 'https://ajax.googleapis.com/ajax/services/search/news?q='.$querySearchedTerm.'&v=1.0&userip='.$clientIP.'&start='.$queryPage;
    else
        $url = 'https://ajax.googleapis.com/ajax/services/search/news?q='.$querySearchedTerm.'&v=1.0&userip='.$clientIP;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'www.haine-copii-jucarii.ro');
    $body = curl_exec($ch);
    curl_close($ch);

    echo $body;
?>