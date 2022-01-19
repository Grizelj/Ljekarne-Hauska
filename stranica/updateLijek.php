<?php 
        include "spoj.php";
        $id = $_GET['id'];
        $result = mysqli_query($conn,"SELECT * from lijek where id='$id'");
        $redak=mysqli_fetch_array($result);

        if(isset($_POST["submit"])){
            if(mysqli_query($conn,"UPDATE lijek set id='$_GET[id]', ime='$_POST[ime]', opis='$_POST[opis]', 
            cijena='$_POST[cijena]' where id='$_GET[id]'")){
                header("Location: ispis.php");
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/head.php"?>
</head>
<body>
    <div>
        <form class="log-in-form text-center" id="update" action="" method="post">
            <h4 class="text-center">Detalji lijeka</h4>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['ime'] ?>" name="ime" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['opis'] ?>" name="opis" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['cijena'] ?>" name="cijena" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['kolicina'] ?>" name="kolicina" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['stanje1'] ?>" name="stanje1" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['stanje2'] ?>" name="stanje2" required>
            </div>
            <div>
                <button class="btn btn-secondary" type="submit" name="submit" id="upd_btn">Promjeni lijek!</button>
            </div>
        </form>
    </div>
</body>
</html>