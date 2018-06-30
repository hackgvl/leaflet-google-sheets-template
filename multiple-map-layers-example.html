<html>
<head>
  <title>Greenville Map Layers Demo</title>
  <meta name="description" content="A demo map layer for Greenville. See data.codeforgreenville.org for more."/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />
  <link rel="stylesheet" href="map.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
  <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=bA5WISoAPsk5r0GJ3hHGTkAMFEskFOA2"></script>
</head>
<body>
    <div id="map">
    </div>
    <script>
var mileMarkerIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
  iconSize: [20,30],
  iconAnchor: [12, 32],
  popupAnchor: [1, -34],
});
var parkingIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
  iconSize: [36, 36],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
});
var waterFountainIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png',
  iconSize: [20, 30],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
});
var entranceIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  iconSize: [10, 10],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
});
      // using leafletjs.com and its GeoJSON
    function onEachParkingFeature(feature, layer) {
      // does this feature have a property named popupContent?
      if (feature.properties && feature.properties.title) {
        var popuphtml = "<em>Parking Spot</em> " + "<strong>" + feature.properties.title + "</strong><ul><li>Notes: " + feature.properties.notes + "</li></ul>";
        layer.bindPopup(popuphtml);
        layer.setIcon(parkingIcon);
      }
    }
      // using leafletjs.com and its GeoJSON
    function onEachEntranceFeature(feature, layer) {
      // does this feature have a property named popupContent?
      if (feature.properties && feature.properties.title) {
        var popuphtml = "<em>Entrance</em> " + "<strong>" + feature.properties.title + "</strong><ul><li>Notes: " + feature.properties.notes + "</li></ul>";
        layer.bindPopup(popuphtml);
        layer.setIcon(entranceIcon);
      }
    }
      // using leafletjs.com and its GeoJSON
    function onEachMileMarkerFeature(feature, layer) {
      // does this feature have a property named title?
      if (feature.properties && feature.properties.title) {
        var popuphtml = "<em>Mile Marker</em> " + "<strong>" + feature.properties.title + "</strong><ul><li>Notes: " + feature.properties.notes + "</li></ul>";
        layer.bindPopup(popuphtml);
        layer.setIcon(mileMarkerIcon);
      }
    }
      // using leafletjs.com and its GeoJSON
    function onEachFountainFeature(feature, layer) {
      // does this feature have a property named title?
      if (feature.properties && feature.properties.title) {
        var popuphtml = "<em>Water Fountain</em> " + "<strong>" + feature.properties.title + "</strong><ul><li>Notes: " + feature.properties.notes + "</li></ul>";
        layer.bindPopup(popuphtml);
        layer.setIcon(waterFountainIcon);
      }
    }
    var trailcount = 0;
    function onEachLineFeature(feature, layer) {
      layer.options.color = '#FFF';
      layer.options.opacity = 1;
      layer.options.weight = 8;
//      console.log(layer);
      if(trailcount == 2) {
        layer.options.weight = 6;
        layer.options.opacity = .7;
        layer.options.dashArray = [10,10,10];
      }
      // does this feature have a property named title?
      if (feature.properties && feature.properties.title) {
        var popuphtml = "<strong>" + feature.properties.title + "</strong>";
        popuphtml = popuphtml + "</li></ul>";
        layer.bindPopup(popuphtml);
      }
      trailcount++;
    }
    // Read JSON to variable via http://stackoverflow.com/questions/8191238/how-can-i-set-json-into-a-variable-from-a-local-url
    function readJSON(file) {
      var request = new XMLHttpRequest();
      request.open('GET', file, false);
      request.send(null);
      if (request.status == 200)
        return request.responseText;
    };
      var mapLayer = MQ.mapLayer(), map;
      map = L.map('map', {
        layers: mapLayer,
        center: [ 34.8650212,-82.3985128 ],
        zoom: 12
      });
//      map.locate({setView: true, maxZoom: 16});
      var milesdata = JSON.parse(readJSON('https://data.openupstate.org/map/preview/swamp-rabbit-trail-mile-markers/geojson.php'));
      miles = L.geoJson(milesdata, {
        onEachFeature: onEachMileMarkerFeature
      }).addTo(map);
      var entrancedata = JSON.parse(readJSON('https://data.openupstate.org/map/geojson/swamp-rabbit-trail-entrances/'));
      entrances = L.geoJson(entrancedata, {
        onEachFeature: onEachEntranceFeature
      }).addTo(map);
      var fountaindata = JSON.parse(readJSON('https://data.openupstate.org/map/preview/swamp-rabbit-trail-water-fountains/geojson.php'));
      fountains = L.geoJson(fountaindata, {
        onEachFeature: onEachFountainFeature
      }).addTo(map);
      var swamprabbit = JSON.parse(readJSON('https://data.openupstate.org/map/preview/swamp-rabbit-trail-path/trail.geojson'));
      srt = L.geoJson(swamprabbit, {
        onEachFeature: onEachLineFeature
      }).addTo(map);
      var parkingdata = JSON.parse(readJSON('https://data.openupstate.org/map/preview/swamp-rabbit-trail-parking/geojson.php'));
      parking = L.geoJson(parkingdata, {
        onEachFeature: onEachParkingFeature
      }).addTo(map);
      tileControls = {
        'Map': mapLayer,
        'Hybrid': MQ.hybridLayer(),
        'Satellite': MQ.satelliteLayer(),
        'Dark': MQ.darkLayer(),
        'Light': MQ.lightLayer()
      };
      dataControls = {
        'Water Fountains': fountains,
        'Entrances': entrances,
        'Mile Markers': miles,
        'Parking': parking,
        'Swamp Rabbit Trail': srt
      };
      L.control.layers(tileControls, dataControls).addTo(map);
  </script>
</body>
</html>
