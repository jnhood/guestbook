<?php

$config = [];

$t = filter_input(INPUT_GET,"t");
$config['db'] = $t==1?"test.csv":"guestbook.csv";
