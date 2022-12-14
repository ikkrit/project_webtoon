<?php require_once ROOT.'/Views/fractions/_head.html.php';?>

<?php if($page != 'home') require_once ROOT.'/Views/fractions/_nav.html.php';?>


<!-------------------------- MAIN -------------------------->

        <main class="main">
            <?= $content;?>
        </main>

<!-------------------------- MESSAGES -------------------------->
        <div class="message__text">
            <?php if(!empty($_SESSION['erreur'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['erreur']; unset($_SESSION['erreur'])?>
                </div>
            <?php endif; ?>

            <?php if(!empty($_SESSION['message'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message']; unset($_SESSION['message'])?>
                </div>
            <?php endif; ?>
        </div>

<!------------------------- FOOTER ------------------------->

<?php require_once ROOT.'/Views/fractions/_footer.html.php';?>


    


