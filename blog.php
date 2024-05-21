<?php
include 'koneksi.php';

// Query untuk mengambil data artikel dari database
$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($koneksi, $sql);

// Periksa jika ada hasil
if (mysqli_num_rows($result) > 0) {
    // Loop untuk menampilkan setiap artikel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='Blog-box'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>Tidak ada artikel ditemukan.</p>";
}

// Tutup koneksi
mysqli_close($koneksi);
?>