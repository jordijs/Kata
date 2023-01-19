<form method="post">
<label>Introdueix el nombre:</label>
<input type="text" name="arabicNumber">
</form>

<?php 

if (!empty($_POST)) {

    $arabicNumber = $_POST["arabicNumber"];
    if (($arabicNumber >= 1) && ($arabicNumber <=3999)) {

        $romanNumber = "";

        echo "El nombre " . $arabicNumber . " en romà és: " . $romanNumber;
    } else {
        echo "Error, fora de rang";
    }
}


?>