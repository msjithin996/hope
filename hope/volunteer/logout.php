<?php
session_start();
session_destroy();

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('logged out successfulllly')
    window.location.href='../index.html';
    </SCRIPT>");;
?>