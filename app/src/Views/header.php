<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $this->path; ?>/public/css/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css">
    <title>GC Plastic | <?php echo $title ?></title>
</head>
<body>
    <header>
        <img class="logo" src="#" alt="Logo GC Plastic">
        <nav class="hnav">
            <div class="hnav-accueil hnav-a">
                <a href="<?= $this->path ?>">
                    ACCUEIL
                </a>
            </div>
            
            <div class="hnav-services hnav-a">
                <a href="<?= $this->path ?>/services">
                    SERVICES
                </a>
            </div>
            <div class="hnav-machines hnav-a">
                <a href="<?= $this->path ?>/park">
                    PARC MACHINES
                </a>
            </div>
            <div class="hnav-actualites hnav-a">
                <a href="<?= $this->path ?>/news">
                    ACTUALITES
                </a>
            </div>
            <div class="hnav-contact hnav-a">
                <a href="<?= $this->path ?>/contact">
                    CONTACT
                </a>
            </div>
        </nav>
    </header>
    <div class="out-header"></div>