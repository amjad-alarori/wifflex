<div class="sidenav">
    <h6 style="color: #f1f1f1" <?php echo !isset($_SESSION['user'])?"hidden":"" ?>>Welkom <?php echo isset($_SESSION['user'])?$_SESSION['user']:"" ?></h6>
    <a href="/">Home</a>
    <a href=" <?php echo isset($_SESSION['user'])?"Profiel":"login" ?> "> <?php echo isset($_SESSION['user'])?"Profiel":"Login" ?></a>
    <a href="categorie">Categorieën</a>
    <a href="search">Zoeken</a>
    <a href="about">Over ons</a>
    <a href="contact">Contact</a>
    <?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
        <a href="upload">Upload</a>
    <?php endif; ?>
</div>





