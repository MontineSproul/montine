<?php $context = $_SERVER['REQUEST_URI']; ?>
<!doctype html>
<html>
    <head>
        <title>Montine's Photos</title>
        <link href="index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <header>
         <nav>
            <ul>
                <li><a class="link <?php echo $context == '/' ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li><a class="link <?php echo $context == '/about.php' ? 'active' : ''; ?>" href="about.php">About Me</a></li> 
                <li><a class="link <?php echo $context == '/resume.php' ? 'active' : ''; ?>" href="resume.php">Resume</a></li>
                <li><a class="link <?php echo $context == '/photos.php' ? 'active' : ''; ?>" href="photos.php">Photos</a></li>
            </ul>
        </nav>
    </header>
    <main>