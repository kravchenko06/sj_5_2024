<?php
include('other/header.php');
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
              
                <?php
                    unset($_SESSION['logged_in']);
                    unset($_SESSION['is_admin']);
                    header('Location: login.php');
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('other/footer.php');
?>