<?php

// Mengambil nilai input dari pengguna jika tersedia
$input = isset($_POST['input']) ? $_POST['input'] : '';
// Melakukan sanitasi pada nilai input untuk mencegah XSS
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

// Mengambil nilai email dari pengguna jika tersedia
$email = isset($_POST['email']) ? $_POST['email'] : '';
// Melakukan sanitasi pada nilai email
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

// Menampilkan formulir dengan nilai input yang telah dimasukkan oleh pengguna
echo '
<form method="post">
    <label for="input">Nama</label>
    <input type="text" name="input" value="' . $input . '">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value="' . $email . '">
    <br>
    <input type="submit" value="Submit">
</form>
';

// Outputkan nilai input yang telah dimasukkan oleh pengguna
echo "<br><br>Nilai input: " . $input . "<br>";

// Outputkan nilai email yang telah dimasukkan oleh pengguna
echo "Nilai email: " . $email . "<br>";

// Validasi email
if (!empty($email)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid: " . $email;
    } else {
        echo "Email tidak valid";
        }
    }


?>