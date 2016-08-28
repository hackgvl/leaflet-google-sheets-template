Created during OpenData Day 2014 in Greenville SC
https://github.com/OpenUpstate/OpenDataDay2014

* [Resources](https://github.com/codeforgreenville/leaflet-wi-fi-map-using-google-sheets)
* [Map Source Google Spreadsheet Data](http://joinopenworks.com/r/wifi)

PHP is used to enerate GeoJSON using a Google Docs / Drive Spreadsheet as the source and then render markers and Wi-Fi data
from the spreadsheet into a Leaflet Javascript-based map that will work in any modern web browser.

Updates to Google the spreadsheet appear on the map somewhere between immediately or as much as a few minutes later.

It's also possible to connect to a Google spreadsheet using an API call, but this code requires the spreadsheet to be published to 
the web, and therefore doesn't use the Google APIs to get the data. To publish the Google spreadsheet open the file and go to (File -> Publish to Web) for 

Look at the normal Google Sheets spreadsheet and notice the "key value", which will be a bunch of random numbers and letters.

The source URL used in the guest-wi-fi-google-spreadsheet-to-geojson.php PHP script is the one which renders a CSV version
of the Google spreadsheet. Insert your Google spreadsheet key near the top of guest-wi-fi-google-spreadsheet-to-geojson.php 
where is says PASTEYOURGOOGLESHEETSKEYHERE

That file is of the format
https://docs.google.com/spreadsheet/pub?key={Google spreadsheet key}&single=true&gid=0&output=csv

The column values are used to generate the GeoJSON hard-coded, so they need to be in the following format, with these exact names
owner, ssid, passphrase, notes, latitude, longitude

On easy to get latitude and longitude numbers is to go to Google Maps, zoom in and center the position you want in the middle of the map. 
The Google Maps URL for the map will contain the longitude,latitude (in that order) ex: 34.8509174,-82.3987371

The index.html file loads the GeoJSON file into a local Javascript variable. Point this at your GeoJSON file and Leaflet will 
render the GeoJSON data. For example, you'll need to change this line to point at your PHP script that renders the JSON

var geoJsonData = JSON.parse(readJSON('http://example.com/wifi/guest-wi-fi-google-spreadsheet-to-geojson.php'));

Leaflet JS is using open MapQuest tiles. [As of July 2016](http://devblog.mapquest.com/2016/06/15/modernization-of-mapquest-results-in-changes-to-open-tile-access/),
it's necessary to [register an account with MapQuest. Up to 15,000 views a month is free](https://developer.mapquest.com/plans).

If you register with CloudMade you can use their map tiles instead, as described by Leaflet 
example http://leafletjs.com/examples/geojson.html

If using Mapquest then after registering for an account do the following:
* [Login to your developer account](https://developer.mapquest.com/user/login)
* Go to Keys and Reporting
* Register a new Application. Give it a name. The callback may not be necessary. Save the application
* Click on the "Application" you created and copy the "Consumer Key", NOT the secret.
* You'll use that key value in the index.html in the MapQuest <script> tag where it says =PASTEYOURMAPQUESTKEYHERE

Leaflet has a bunch of other plug-ins and options, so the maps can be tweaked in all sorts of ways.

Documentation for MapQuest and Leaflet begins at
https://developer.mapquest.com/documentation/leaflet-plugins/maps/
