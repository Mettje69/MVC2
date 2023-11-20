<?php 
    ob_start();

    echo '<article>';
    echo '<h3>'.$books['bookname'].'</h3>';
    echo '<img src = "public/images/'.$books['image'].'">';
    echo '<p>Author(s): '.$books['author'].'</p>';
    echo '<p>Price: '.$books['price'].'</p>';
    echo '<p>Содержание: '.$books['description'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="books" role="button"> Back &raquo;</a>';
    echo '<p>';
    echo '</article>';

    echo '<div style="clear:both;"></div>';


    $content = ob_get_clean();
include 'view/templates/layout.php';
