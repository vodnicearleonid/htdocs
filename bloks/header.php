<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
     <span class="logo">Ideas Burner</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 text-dark text-decoration-none" href="/htdocs/index.php">Home</a>
    </nav>
    <?php
        if ($_COOKIE['log'] == ''):
    ?>
    <a class="btn btn-outline-primary mt-2 me-2 mb-2" href="/htdocs/authentication.php">Authentication</a>
    <a class="btn btn-outline-primary mt-2 mb-2 me-2" href="/htdocs/reg.php">Registration</a>
    <?php
        else:
    ?>
    <a class="btn btn-outline-primary mt-2 mb-2 me-2" href="/htdocs/authentication.php">User's office </a>
    <?php
        endif;
    ?>
</div>
