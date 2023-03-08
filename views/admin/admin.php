<?php include "../../assets/includes/header.php" ?>
    <h1>Admin</h1>
    <?php
    echo $_SESSION["user"];
    ?>
    <input hrep = ".../views/home/logout.php" name = "btnLogout" type = "submit" id = "btn" value = "Logout" />
<?php include "../../assets/includes/footer.php" ?>
