<?php
ob_start();
require_once 'config.php';

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $link = $_POST['link'];
    
    
    $query = "INSERT INTO beasiswa (nama, keterangan, link) 
                VALUES (:nama, :keterangan, :link)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':keterangan', $keterangan);
    $stmt->bindParam(':link', $link);

    if ($stmt->execute()) {
        header("Location: ../app?page=beasiswa/beasiswa"); 
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
    

?>
