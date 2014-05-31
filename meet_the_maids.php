<?php

require_once 'inc/header.phtml';
?>
<div id="content">
<?php
$meet = simplexml_load_file('xml/meet.xml');

require_once 'inc/meet_row.php';

$counter = 0;

foreach($meet->maids->maid as $maid){

    create_row($counter%2,$maid->name,$maid->img,$maid->content);

    $counter++;
}
?>
<div style="clear:both;"></div>
</div>
<?php
require_once 'inc/footer.phtml' ?>