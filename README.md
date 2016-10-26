### Why
Go to Google Maps, zoom into Greenville, SC and type "bike racks" or "dog parks". If you're lucky you get decent info, but inevitably you'll be looking at incomplete or irrelavant results. You may even get advertisments.

This is not to say we should make a public-version of Google Map. Actually, we already have that in OpenStreetMaps.

Rather, lots of great public infomation is locked inside all maps, proprietary and open maps alike, in much the same way styling was locked inside of HTML before CSS.

The current lock-in approach reduces:
* accuracy of maps
* the speed of changes
* the scope of sharing
* the ability to mix and match layers looking for new patterns (what do we see if we overlay tree planting data with census data?)
* portability across applications (browser vs tablet app vs GIS tools)
* depending on the source, oversight and fairness


### What's the Problem with Current Sharing Ideas
Lets say you found park data on the city's GIS system and exported it out to a file. Now, you have the bright idea to build a Google Map with a layer for the parks, plus another layer for bathroom locations.

You share it with friends and 5 of them love the idea. They make their own map with your city parks + their own interests (bike racks, breweries, dog parks, etc).

Everyone goes about sharing and copying the layers of data they like into their maps into their own.

Cool, we have 6 interesting maps.

One week later a dog park closes due to clown sightings. Spring comes and the city has a new park and 3 new breweries.  Oh, and all the bike rakes were moved next to parking decks.

Now what?  Well, things get stale and maps die, that's what.


### How We Solve the Problem
1. A Google Docs / Drive Spreadsheet is used as a real-time data source
2. A PHP script reads the published Google spreadsheet in real-time and converts that to a [GeoJSON format](http://geojson.org/geojson-spec.html)
3. The spreadsheet becomes a public, sharable GeoJSON URL (via the geojson.php) which anybody can then reference in real-time in their own maps.
4. Now any tool that understands GeoJSON, like [LeafletJS](http://leafletjs.com/), can point at one or more URLs and magically get fresh data.


#### Start With a New Google spreadsheet
* Make a copy of the [base spreadsheet template](https://docs.google.com/spreadsheets/d/10eNXFh6mzFtii7B2PW90jmHtrQLJlRCrf3kkHU0HIH8/edit?usp=sharing)
* Rename your copy and start adding real "point" data, including geographic coordinates (longitude, latitude) and other properties

#### Publish Your Google Spreadsheet
* Go to (File -> Publish to Web) and do the following
* "Entire Document" (unless you only want to publish one tab, in which case select the tab)
* "Comma-seperated values (.csv)
* Click Publish
* Save the URL provided. It will look like https://docs.google.com/spreadsheets/d/**{key - bunch or random numbers and letters}**/pub?output=csv

Additions or changes to the spreadsheet will appear on a refreshed map somewhere between immediately and a few minutes later.

The "CSV data source URL" to be used in the google-spreadsheet-to-geojson.php PHP script is slightly different and looks like
``https://docs.google.com/spreadsheet/pub?key={key - bunch or random numbers and letters}&single=true&gid={tab id}&output=csv``

If you want the first tab then use *gid=0* above. If you want to point at another tab then open that tab in you browser and look in the URL for *gid=##########* and use that *gid* value.

### Allowing Other People to Help Curate the Data

Use Google's Share function to give "Edit" permissions to people you trust and then share the URL.

You should consider allowing "Anyone with the link" to edit the data and then all you need to do is share the edit URL with trusted people.

### Using PHP to Convert a Google Sheets CSV to a GeoJSON File
Take the "CSV data source URL" you just constructed and insert it in the $googleSpreadsheetUrl variable near the top of geojson.php

The column values are used in this example to generate the GeoJSON are hard-coded to include 3 fields: title, longitude, and latitude.
If you're using more than these three fields in your GeoJSON output then it will be necessary to  update the field names in the $spreadsheetData array structure of google-spreadsheet-to-geojson.php.

### Getting Latitude and Longitude

If you know how to do custom functions in Google Sheets then you can [convert an address into latitude and longitude](https://ctrlq.org/code/19992-google-maps-functions-for-google-script) with some customization.

Non-programming / manual ways to get latitude and longitude numbers
* Go to MapQuest, zoom in and center the position you want in the middle of the map and right click on the spot you want. The pop-up will show the lat and long.
* In Google Maps the URL for the map will contain the longitude,latitude (in that order) ex: 34.8509174,-82.3987371

### Render a Leaflet Map Showing the GeoJSON Data
The index.html file loads the GeoJSON file into a local Javascript variable. Point this at your GeoJSON file and Leaflet will 
render the GeoJSON data. For example, you'll need to change this line to point at your PHP script that renders the JSON

var geoJsonData = JSON.parse(readJSON('http://example.com/my-map/google-spreadsheet-to-geojson.php'));

Leaflet JS is using open MapQuest tiles. [As of July 2016](http://devblog.mapquest.com/2016/06/15/modernization-of-mapquest-results-in-changes-to-open-tile-access/),
it's necessary to [register an account with MapQuest. Up to 15,000 views a month is free](https://developer.mapquest.com/plans).

### Registering for Map Tiles
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

* Created during OpenData Day 2014 in Greenville SC https://github.com/OpenUpstate/OpenDataDay2014
