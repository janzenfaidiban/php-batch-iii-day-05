<?php 

    // membuat variabel koneksi
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sacode_2023';

    // membuat koneksi ke database
    $koneksi = new mysqli(
                            $server,
                            $username,
                            $password,
                            $database
                        );