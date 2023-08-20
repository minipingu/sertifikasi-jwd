<?php
ob_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $handphone = $_POST['handphone'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $beasiswa = $_POST['beasiswa'];
    $status = 'menunggu review';
    
    //tanggal day,dd/mm/yyyy
    date_default_timezone_set('Asia/Jakarta'); // Set the time zone to Jakarta
    $currentDate = new DateTime();
    $dayNames = [
        'Sunday'    => 'Minggu',
        'Monday'    => 'Senin',
        'Tuesday'   => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday'  => 'Kamis',
        'Friday'    => 'Jumat',
        'Saturday'  => 'Sabtu'
    ];

    $dayName = $dayNames[$currentDate->format('l')];
    $formattedDate = $dayName . ', ' . $currentDate->format('d/m/Y');
    //
    
    $targetDirectory = "../app/uploads/"; 
    $uploadedFile = $targetDirectory . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadedFile)) {
        $query = "INSERT INTO daftar (nama, email, handphone, semester, ipk, beasiswa, berkas,status,tanggal) 
                  VALUES (:nama, :email, :handphone, :semester, :ipk, :beasiswa, :berkas, :status,:tanggal)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':handphone', $handphone);
        $stmt->bindParam(':semester', $semester);
        $stmt->bindParam(':ipk', $ipk);
        $stmt->bindParam(':beasiswa', $beasiswa);
        $stmt->bindParam(':berkas', $_FILES["file"]["name"]); 
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':tanggal', $formattedDate);


        if ($stmt->execute()) {
            // Success
            header("Location: ../app?page=hasil/mahasiswa"); 
            exit();
        } else {
            // Error
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } else {
        // File upload failed
        echo "File upload failed.";
    }
}
?>
