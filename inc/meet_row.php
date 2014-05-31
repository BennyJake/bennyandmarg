<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 5/5/14
 * Time: 7:21 PM
 */


function create_row($passed_position, $name, $img, $content){

    if($passed_position){
        $picture_position = 'right';
        $content_position = 'left';
    }
    else{
        $picture_position = 'left';
        $content_position = 'right';
    }

    ?>
    <div class="row" style="clear:both;">
    <?php

    create_picture($picture_position, $img);

    create_content($content_position, $name, $content);

    ?>
    </div>
    <?php

}

function create_picture($pos,$img){
?>
<div class="picture rand<?php echo rand(1,6);?>" style="float:<?php echo $pos ?>">
    <img src="img/pic/<?php echo $img; ?>">
</div>
<?php
}

function create_content($pos,$name,$content){
?>
<div class="content" style="float:<?php echo $pos ?>">
<h2><?php echo $name ?></h2>
    <p><?php echo $content ?></p>
</div>
<?php
}