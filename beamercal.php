<?php

header('Content-Type: application/json');

echo shell_exec("python /usr/local/bin/ics2fc.py http://opentechcalendar.co.uk/api1/group/151/events.ical");

