SIKUWE - Sistem Informasi Kependudukan Berbasis Website
======

> CATATAN: Aplikasi ini menggunakan bahasa PHP berbasis Framework YII. Silakan gunakan dengan bijak.

## Kebutuhan

  - Webserver: Apache 2.x atau nGinx dengan php 5.x
  - Database : MySQL atau mariaDb

## Unduh

    git clone https://github.com/puskomedia/sikuwe.git

## Impor basis data

    cd /lokasi/folder/sikuwe
    mysql -u root -ppassword sikuwe < protected/data/sikuwe-mysql.sql

## Pengaturan basis data

buat file protected/config/database.php

    <?php
    return array(
        'connectionString' => 'mysql:host=localhost;dbname=sikuwe',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    );

## Konfigurasi

buat folder berikut

    sikuwe/assets
    sikuwe/protected/runtime
