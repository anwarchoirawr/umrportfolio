<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Alamat email tujuan
    $to = "siktyone@gmail.com";
    
    // Subject email
    $subject = "New Contact Message";
    
    // Konten email
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Header email
    $headers = "From: $email";
    
    // Kirim email
    if (mail($to, $subject, $email_content, $headers)) {
        // Jika berhasil
        echo "Message sent successfully.";
    } else {
        // Jika gagal
        echo "Failed to send message.";
    }
}
?>
