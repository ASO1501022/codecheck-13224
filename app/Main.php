<?php namespace Codecheck;
$REQUSET_URL = 'http://challenge-server.code-check.io/api/hash?q=';
function run ($argc, $argv)
{
    global $REQUSET_URL;

    $res = file_get_contents($REQUSET_URL.urlencode($argv[0]));
    $result = json_decode($res,true);
    echo $result['hash'];
}
