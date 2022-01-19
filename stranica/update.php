<?php 
        include "spoj.php";
        $id = $_GET['id'];
        $result = mysqli_query($conn,"SELECT * from zaposlenik where id='$id'");
        $redak=mysqli_fetch_array($result);

        if(isset($_POST["submit"])){
        $squl = "UPDATE zaposlenik set id='$_GET[id]', ime='$_POST[ime]', prezime='$_POST[prezime]', 
        email='$_POST[email]' where id='$id'";
        if(mysqli_query($conn,$squl)){
            header("Location: nadzornaPloca.php");
        }else{
            echo mysqli_error($conn);
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
            <h4 class="text-center">Detalji zaposlenika</h4>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['ime'] ?>" name="ime" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['prezime'] ?>" name="prezime" required>
            </div>
            <div class="registracijskaForma">
                <input type="text" value="<?php echo $redak['email'] ?>" name="email" required>
            </div>
            <div>
                <button class="btn btn-secondary" type="submit" name="submit" id="upd_btn">Promjeni zaposlenika!</button>
            </div>
        </form>
    </div>
</body>
</html>