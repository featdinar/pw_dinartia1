<form method = "POST">
    Masukan Angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="Kirim">
</form>

<?php
    if(isset($_POST["angka"])){
        $newAngka = $_POST["angka"];
        for ($i = 1; $i <= $newAngka; $i++) {
            echo "Ini angka $i <br>";
        }
    }

?>