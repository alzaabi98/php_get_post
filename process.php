<?php


if ( isset($_REQUEST['word']) && (!empty($_REQUEST['word']))) {

    $word =  $_REQUEST['word'];

    echo 'The word "' . $word . '" has length = '  . strlen($word); 

} else {

    echo " please send a word";
}