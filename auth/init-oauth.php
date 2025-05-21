<?php

$discord_url = "https://discord.com/oauth2/authorize?client_id=1342446932186107966&response_type=code&redirect_uri=https%3A%2F%2Fhc.st29.ru%2Fauth%2Fprocess-oauth&scope=identify+guilds.join";
header("Location: $discord_url");
exit();

?>