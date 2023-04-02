<?php
function info()
{
    $file = file_get_contents('info.json');
    $json = json_decode($file, true);
    return json_decode(json_encode($json), FALSE);
}
