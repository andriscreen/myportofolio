<?php
$show_popup = false;
$popup_status = '';
$popup_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email penerima
    $to = "andriscreen@gmail.com";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Isi email
    $email_body = "
    <html>
    <head>
        <title>Pesan Baru dari Portfolio</title>
    </head>
    <body>
        <h2>Pesan Baru dari Website Portfolio</h2>
        <p><strong>Nama:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subjek:</strong> $subject</p>
        <p><strong>Pesan:</strong></p>
        <p>$message</p>
        <hr>
        <p><small>Dikirim dari website portfolio Anda</small></p>
    </body>
    </html>
    ";
    
    // Kirim email
    if (mail($to, $subject, $email_body, $headers)) {
        $show_popup = true;
        $popup_status = "success";
        $popup_message = "Pesan berhasil dikirim! 🎉 Saya akan membalas segera.";
    } else {
        $show_popup = true;
        $popup_status = "error";
        $popup_message = "Maaf, terjadi kesalahan. 😔 Silakan coba lagi atau hubungi langsung ke andriscreen@gmail.com";
    }
}
?>