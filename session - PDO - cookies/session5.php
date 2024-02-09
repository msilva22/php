<?php
session_id('hff1fe3jvbv1dm9qp926c4hapmarray');
require_once('session3.php');
session_regenerate_id();
echo session_id();

var_dump($_SESSION);