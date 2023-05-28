<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'produk':
            include 'master_produk.php';
            break;
    }
}