<?php
if(isset($_SESSION['user'])): ?>
    <form action="wyloguj.php" method="post">
        <?php
        echo "Jesteś już zalogowany jako " . $_SESSION['user'];

        ?>

        <input type="submit" value="Wyloguj">
    </form>

<?php else: ?>
<h3>Musisz się zalogować aby uzyskać dostęp do tej strony</h3>
<a href="logowanie.php">Zaloguj się</a>
<?php die(); endif;  ?>