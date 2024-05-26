<?php
    include('other/header.php');

    
?> 
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <h1>Registrácia</h1>
                <form action="" method="POST">
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="password">Heslo:</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="confirm_password">Zopakovať heslo:</label>
                    <br>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br>
                    <button type="submit" name="user_register">Registrovať sa</button>
                </form>
            </div>
        </div>
    </section>
    <?php
        $user = new User();


        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_register'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];
    
            if ($password === $confirmPassword) {
               
                if ($user->register($email, $password)) {
                    
                    echo "<p>Registrácia úspešná</p>";
                } else {
                    
                    echo "<p>Registrácia zlyhala</p>";
                }
            } else {
            
                echo "<p>Heslá sa nezhodujú</p>";
            }
        }
    ?>
</main>

<?php
    include_once('other/footer.php');
?>