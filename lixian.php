#!/usr/bin/php
<?php
$json=`curl -q 'http://lixian.qq.com/handler/bt_handler.php?cmd=readinfo'  -F myfile=@b.torrent`;
var_dump(json_decode($json));