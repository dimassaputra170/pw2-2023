<?php

    /*
        Variabel System
        Variabel built in PHP
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    /*
        Variable User
        Variable yang dibuat oleh user
    */
    $name = 'Anan';
    $age = 18;
    $weight = 44.0;

    echo ' Nama saya adalah ' . $name;

    /*
        Variable kostan 
        variabel yang tidak bisa diubah nilainya
        1. menggunakan define() | define('fruit', 'Apel');
        2. menggunakan const    | const fruit = 'Apel';
    */
    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>