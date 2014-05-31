<?php require_once 'inc/header.phtml' ?>

    <form class="map_form">
        <fieldset>
            <legend>Where are you coming from?</legend>
            <label for="address">Address: <input name="address" id="address"></label>
            <input type="button" value="The Hotel" onclick="draw_directions(destination_hotel,'lodge')">
            <input type="button" value="This Address" onclick="draw_directions(document.forms[0].address.value,'lodge')">
        </fieldset>
    </form>

    <div id="lodge_map" class="lodge_map map"></div>
    <div id="lodge_panel" class="lodge_panel"></div>

    <span>&nbsp;</span>
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript"
            src="js/func/map_directions.js"></script>

<?php require_once 'inc/footer.phtml' ?>