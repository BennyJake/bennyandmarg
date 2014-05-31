<?php require_once 'inc/header.phtml';

    $meet = simplexml_load_file('xml/meet.xml');

    require_once 'inc/meet_row.php';
?>
    <div class="content">
        <?php

        create_row(0,$meet->hotel->name,$meet->hotel->img,$meet->hotel->content);

        ?>
    <div style="clear:both;"></div>
    <div class="form paper_bg row">
        <form class="map_form">
                <h3>Where are you coming from?</h3>
                <div style="text-align: center;float:left;padding:10px;">
                <input name="address" id="address" size="50">
                <input type="button" value="This Address" onclick="draw_directions(document.forms[0].address.value,'hotel')">
                </div>
                <div style="text-align:center;float:left;">
                <span>OR</span>
                </div>
                <div style="text-align: center;float:left;">
                <input type="button" value="The Reception/Ceremony Site" onclick="draw_directions(destination_lodge,'hotel')">
                <label for="saved_address"></label>
                </div>
                <input type="hidden" name="map" value="hotel">
        </form>
        <div style="clear:both;"></div>
    </div>

    <div id="hotel_map" class="hotel_map map"></div>
    <div id="hotel_panel" class="hotel_panel"></div>
    </div>
    <div style="clear:both;"></div>
    <span>&nbsp;</span>
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript"
            src="js/func/map_directions.js"></script>

<?php require_once 'inc/footer.phtml' ?>