<?php
header("Content-Type: text/plain");
$nick = (isset($_GET["nick"])) ? $_GET["nick"] : NULL;
$name = (isset($_GET["name"])) ? $_GET["name"] : NULL;
if ($nick && $name) {
echo "Bonjour " . $name . " ! Je vois que votre pseudo est " . $nick;
} else {
echo "FAIL";
}
?>