<?php
if (!extension_loaded("gettext")) {
    throw new Exception("GetText extension is required.");
}


function showMessages() {
   echo _("This is an internationalized Language");
   echo "\n";
   echo _("Goodbye!");
   echo "\n";
}


//putenv('LC_MESSAGES=ja_JP.UTF-8');
//setlocale(LC_MESSAGES, 'ja_JP.UTF-8');
$textDomain = 'messages';
bindtextdomain($textDomain, './locale');
bind_textdomain_codeset($textDomain, 'UTF-8');
textdomain($textDomain);

putenv('LC_MESSAGES=ja_JP.UTF-8');
setlocale(LC_MESSAGES, 'ja_JP.UTF-8');
showMessages();

putenv('LC_MESSAGES=en_US');
setlocale(LC_MESSAGES, 'en_US.UTF-8');
showMessages();


