<?php
// Set database file path
$db_file = '/var/www/html/uno-site/tournament.db'; try {
    // Connect to SQLite database
    $pdo = new PDO("sqlite:$db_file"); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") { $name = $_POST['teacherName']; $email = 
        $_POST['teacherEmail'];
        // Prepare and execute insert query
        $stmt = $pdo->prepare("INSERT INTO signups (name, email) VALUES (:name, :email)"); 
        $stmt->bindParam(':name', $name); $stmt->bindParam(':email', $email); if ($stmt->execute()) {
            echo "Signup successful!";
        } else {
            echo "Signup failed.";
        }
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
