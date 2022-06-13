<?php
header('HTTP/1.1 500 Internal Server Error', true, 500);
trigger_error('ISE function called.', E_USER_ERROR);
