<?php 
    $images = [
        '20200101_222625.jpg',
        '20191213_084659.jpg',
        'Languasco-Sproul-121.jpg',
    ];
?>
<?php include('header.php'); ?>
    <?php foreach($images as $value) { ?>
        <img src="<?php echo $value; ?>">
    <?php } ?>
<?php include('footer.php'); ?>