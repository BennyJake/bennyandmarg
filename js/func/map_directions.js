/**
 * Created by Ben on 5/20/14.
 */

var destination_hotel = "1715 Parkway Plaza, Normal, IL 61761"
var destination_lodge = "25432 Davis Lodge Rd Hudson IL 61748"

function draw_directions(address,dest){

    if(address!=''){

        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();

        var map = new google.maps.Map(document.getElementById(dest+'_map'), {
            zoom:7,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById(dest+'_panel'));

        var destination = '';

        if(dest=='hotel'){
            destination = destination_hotel;
        }
        else if(dest=='lodge'){
            destination = destination_lodge;
        }

        var request = {
            origin: address,
            destination: destination,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });

        save_address(address);
    }
}

//requires https://github.com/AlexChittock/JQuery-Session-Plugin - Jquery Session Plugin by Alex Chittock
function save_address(address){

    if(address!=''){
        $.session.set('address',address);
    }
}

function get_address(){

    if($.session.set('address',address)){
        return $.session.set('address',address);
    }

    return '';
}