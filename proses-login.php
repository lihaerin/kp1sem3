<?php
include("config.php");

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepared statement untuk mencegah serangan SQL Injection
    $sql = "SELECT * FROM account WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header('Location: dashboard.php?status=sukses');
            exit();
        } else {
            header('Location: login.php?status=gagal');
            exit();
        }
        
        $stmt->close();
    } else {
        // Handle kesalahan statement SQL
        echo "Error in prepared statement: " . $conn->error;
    }
} else {
    // Handle jika data dari form tidak terkirim dengan benar
    echo "Username atau password tidak tersedia.";
}

$conn->close();
?>
