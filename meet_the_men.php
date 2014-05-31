<?php

require_once 'inc/header.phtml';
?>
    <div id="content">
        <?php
        $meet = simplexml_load_file('xml/meet.xml');

        require_once 'inc/meet_row.php';

        $counter = 0;

        foreach($meet->men->man as $man){

            create_row($counter%2,$man->name,$man->img,$man->content);

            $counter++;
        }
        ?>
    </div>
    <div style="clear:both;"></div>
<?php
require_once 'inc/footer.phtml' ?>