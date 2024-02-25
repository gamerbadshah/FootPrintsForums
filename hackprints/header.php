<div class="top-bar">
        <a class="logo" href="index.php">Footprints Forums</a>
        <div class="header">
            <?php
            include"connection.php";
                session_start();
                if((isset($_SESSION['login'])== true)){
                    ?>
                    <a href="/hackprints/newThread.php">
                        New Thread
                    </a>&nbsp&nbsp
                    <?php
                     echo("Logged in as ".$_SESSION['username']);
                     ?>
                     <a href="/hackprints/logout.php">Logout?</a>
                    <?php
                }else{
            ?>  
                <a href="register.php" class="newThButton">
                    Register
            </a>&nbsp&nbsp
                <a href="login.php" class="newThButton">
                    Login
            </a>
            <?php
                }
            ?>
            </div>
    </div>