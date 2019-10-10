 <style>
    .modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    #floating-panel {
      position: absolute;
      top: 10px;
      left: 25%;
      z-index: 5;
      background-color: #fff;
      padding: 5px;
      border: 1px solid #999;
      text-align: center;
      font-family: 'Roboto','sans-serif';
      line-height: 30px;
      padding-left: 10px;
    }
    #floating-panel {
      position: absolute;
      top: 5px;
      left: 50%;
      margin-left: -180px;
      width: 350px;
      z-index: 5;
      background-color: #fff;
      padding: 5px;
      border: 1px solid #999;
    }
    #latlng {
      height: 500px;
      width: 800px;
    }
  </style>
<div class="modal-header bg-dark text-light">
    <h5 class="modal-title">Tracking</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row" id="latlng">
        <div class="col-12" >
              <div id="map"></div>
        </div>
    </div>
</div>

<script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: {lat: -6.9214, lng: 107.6088}
      });
      var geocoder = new google.maps.Geocoder;
      var infowindow = new google.maps.InfoWindow;
      geocodeLatLng(geocoder, map, infowindow);

    }

    function geocodeLatLng(geocoder, map, infowindow) {
     var input = '{!!$coord!!}';
     var latlngStr = input.split(',', 2);
     var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
     var input2 = '{!!$coord2!!}';
     var latlngStr2 = input2.split(',', 2);
     //var latlng2 = {lat2: parseFloat(latlngStr2[0]), lng2: parseFloat(latlngStr2[1])};
     var latlng2 = "-8.9214, 109.6088";
     geocoder.geocode({'location': latlng}, function(results, status) {
       if (status === 'OK') {
         if (results[0]) {
           map.setZoom(15);
           var marker = new google.maps.Marker({
             position: latlng,
             map: map
           });
           var marker2 = new google.maps.Marker({
             position: latlng2,
             map: map
           });
           infowindow.setContent(results[0].formatted_address);
           infowindow.open(map, marker);
           marker2.setMap(map);
         } else {
           window.alert('No results found');
         }
       } else {
         window.alert('Geocoder failed due to: ' + status);
       }
     });
   }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA50wXIPnYz8Bx-gBj2blRAxQ9t1GRIPKg&callback=initMap">
  </script>
<!--
<div class="modal-header bg-dark text-light">
    <h5 class="modal-title">Lacak Pengiriman</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    {!! Mapper::render(); Mapper::renderJavascript(); !!}
</div>
-->