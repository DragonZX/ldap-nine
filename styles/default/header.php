
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="styles/default/css/main.css">
    <title><?php if(isset($PageTitle)) echo $PageTitle; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img width="100px" alt="logo" src="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?php echo _("Home"); ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo _("Company"); ?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sorting
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><?php echo _("By alfabet"); ?></a>
                    <a class="dropdown-item" href="#"><?php echo _("By department"); ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><?php echo _("Newbies");?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link disabled" href="#"><?php echo _("Broshure"); ?></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Staff search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo _("Search"); ?></button>
        </form>
    </div>
</nav>
</body>
</html>
<?php
