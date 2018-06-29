<?php
$urls = $_GET['url'];
$nm = $_GET['nm'];
exec("wget --limit-rate=400023k $urls -O $nm");
