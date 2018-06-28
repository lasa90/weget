<?php
$urls = $_GET['url'];
exec("wget --limit-rate=400023k $urls");
