<?php
    require "header.php";
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyfields"){
                            echo '<p>Fill in the fields!</p>';
                        }
                        else if($_GET['error'] == "invaliduidmail"){
                            echo '<p>Iinvalid username and e-mail!</p>';
                        }
                        else if($_GET['error'] == "invaliduid"){
                            echo '<p>Invalid username</p>';
                        }
                        else if($_GET['error'] == "invalidmail"){
                            echo '<p>Invalid e-mail</p>';
                        }
                        else if($_GET['error'] == "passwordcheck"){
                            echo '<p>Your passwords do not match!</p>';
                        }
                        else if($_GET['error'] == "usertaken"){
                            echo '<p>Username is already taken!</p>';
                        }
                    }
                    else if ($_GET['signup'] == "success"){
                        echo '<p>Signup successfully!</p>';
                    }
                ?>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input class="signname" type="text" name="uid" placeholder="Username"><br>
                    <input class="signemail" type="text" name="mail" placeholder="E-mail"><br>
                    <input class="signpass" type="password" name="signuppwd" placeholder="Password"><br>
                    <input class="rppass" type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"
?>