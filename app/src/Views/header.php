<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $this->path; ?>/public/css/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css">
    <title>GC Plastic | <?php echo $title ?></title>
</head>
<body>
    <header>
        <a href="<?= $this->path; ?>"><img class="logo" src="<?= $this->path; ?>/public/images/logo.png" alt="Logo GC Plastic"></a>
        <nav class="hnav">
            <div class="hnav-accueil hnav-a">
                <a href="<?= $this->path ?>?action=home">
                    ACCUEIL
                </a>
            </div>
            
            <div class="hnav-services hnav-a">
                <a href="<?= $this->path ?>?action=services">
                    SERVICES
                </a>
            </div>
            <div class="hnav-machines hnav-a">
                <a href="<?= $this->path ?>?action=park">
                    PARC MACHINES
                </a>
            </div>
            <div class="hnav-actualites hnav-a">
                <a href="<?= $this->path ?>?action=news">
                    ACTUALITES
                </a>
            </div>
            <div class="hnav-contact hnav-a">
                <a href="<?= $this->path ?>?action=contact">
                    CONTACT
                </a>
            </div>
        </nav>
        <img id="header-mobileImg" draggable="false" src="<?= $this->path ?>/public/images/menu.png" alt="menu mobile">
    </header>
    <div class="out-header"></div>
    <div id="mobileMenu" class="mobileMenu_disable">
        <ul id ="mobileMenu-buttonGroupe">
        <a href="<?= $this->path ?>?action=home"><li>ACCUEIL</li></a>
            <a href="<?= $this->path ?>?action=services"><li>SERVICES</li></a>
            <a href="<?= $this->path ?>?action=park"><li>PARC MACHINES</li></a>
            <a href="<?= $this->path ?>?action=news"><li>ACTUALITES</li></a>
            <a href="<?= $this->path ?>?action=contact"><li>CONTACT</li></a>
        </ul>
    </div>
    <div id="mobileMenu-background" class="mobileMenu-background_disable"></div>