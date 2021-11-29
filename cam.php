<?php

error_reporting(E_ALL);

exec('sudo killall libcamera-vid');

header("Content-Type: video/mp4");

passthru('sudo libcamera-vid -t 9999999 -o - | ffmpeg -i - -vcodec copy -f mp4 -movflags frag_keyframe+empty_moov -');
