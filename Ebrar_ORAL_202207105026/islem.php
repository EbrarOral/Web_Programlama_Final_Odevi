<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);

    // Başarılı mesajı göster
    echo "<h2>Yorumunuz başarıyla gönderildi</h2>";
    echo "<p><strong>Adınız:</strong> $name</p>";
    echo "<p><strong>Yorumunuz:</strong> $comment</p>";
} else {
    // Form POST yöntemi ile gönderilmemişse ana sayfaya yönlendir
    header("Location: islem.php");
    exit();
}
?>

