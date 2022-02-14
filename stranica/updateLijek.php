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
                <input type="text" value="<?php echo $redak['cijena'] ?>" name="cijena" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['kolicina'] ?>" name="kolicina" required>
            </div>
            <div class="registracijskaForma">
                <textarea name="opis" id="opis" cols="22" rows="10"><?php echo $redak['opis'] ?></textarea>
            </div>
            <div class="registracijskaForma">
                <label for="stanje1">Stanje 1</label>
                <input type="checkbox" id="stanje1" value="<?php echo $redak['stanje1'] ?>" name="stanje1">
            </div>
            <div class="registracijskaForma">
                <label for="stanje2">Stanje 2</label>
                <input type="checkbox" id="stanje2" value="<?php echo $redak['stanje2'] ?>" name="stanje2">
            </div>       
            <div>
                <button class="btn btn-secondary" type="submit" name="submit" id="upd_btn">Promjeni lijek!</button>
            </div>
        </form>
    </div>
</body>
</html>