<?php

// Fungsi untuk mendownload video
function download_video($url) {
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $response = curl_exec($ch);
 curl_close($ch);

 // Simpan video ke file
 $file_name = basename($url);
 file_put_contents($file_name, $response);
}

// Cek apakah URL sudah diisi
if (isset($_POST['url'])) {
 $url = $_POST['url'];
 download_video($url);
 echo "Video berhasil diunduh!";
} else {
 echo "Masukkan URL video TikTok!";
}

?>

<!-- Form untuk memasukkan URL -->
<form action="" method="post">
 <input type="text" name="url" placeholder="Masukkan URL video TikTok">
 <button type="submit">Unduh</button>
</form>
