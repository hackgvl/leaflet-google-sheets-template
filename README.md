See https://data.openupstate.org/map-layers for existing open Greenville map layers and GeoJSON data.

### Why?
Go to Google Maps, zoom into Greenville, SC and type "bike racks" or "dog parks". If you're lucky you get decent info, but inevitably you'll be looking at incomplete or irrelavant results. You may even get advertisments.

This is not to say we should make a public-version of Google Map. Actually, we already have that in OpenStreetMaps.

Rather, lots of great public infomation is locked inside all maps, proprietary and open maps alike, in much the same way styling was locked inside of HTML before CSS.

The current lock-in approach reduces:
* accuracy of updates
* the speed of changes
* the scope of sharing
* the ability to mix and match layers looking for new patterns (what do we see if we overlay tree planting data with census data?)
* portability across applications (browser vs tablet app vs GIS tools)
* depending on the source, oversight and fairness


### What's the Problem with Current Sharing Methods?
Lets say you found park data on the city's GIS system and exported it out to a file. Now, you have the bright idea to build a Google Map with a layer for the parks, plus another layer for bathroom locations.

You share it with friends and 5 of them love the idea. They make their own map with your city parks + their own interests (bike racks, breweries, dog parks, etc).

Everyone goes about sharing and copying the layer data they like the most into their own personal maps.

Cool, we have 6 interesting maps.

One week later a dog park closes due to clown sightings. Spring comes and the city has a new park and 3 new breweries.  Oh, and all the bike rakes were moved next to parking decks.

Now what?  Well, things get stale and maps die, that's what.


### How We Solve the Problem
1. A Google Docs / Drive Spreadsheet is used as a real-time data source that virtually anybody can help maintain.
2. A PHP script reads the published Google spreadsheet in real-time and converts that into a [GeoJSON format](http://geojson.org/geojson-spec.html)
3. The spreadsheet is now a public, sharable, standardized GeoJSON URL (via the geojson.php) which anybody can reference or edit in real-time.
4. Any tool which understands GeoJSON, like [LeafletJS](http://leafletjs.com/), can point at one or more map layer URLs and magically show fresh data.


### Start With a New Google Spreadsheet
* Make a copy of the [base spreadsheet template](https://docs.google.com/spreadsheets/d/10eNXFh6mzFtii7B2PW90jmHtrQLJlRCrf3kkHU0HIH8/edit?usp=sharing) (File -> Make a Copy)
* Rename your copy and start adding real "point" data, including geographic coordinates (longitude, latitude) and other properties

### Publish Your Google Spreadsheet
* Go to (File -> Advanced -> Publish to Web).
* There are two drop-down boxes near the top of the box that opens.
* For the left drop-down box select "Entire Document"
* For the right drop-down box select "Comma-seperated values (.csv)
* Now click the Publish button
* A URL will be provided. It looks like https://docs.google.com/spreadsheets/d/{a-bunch-of-random-numbers-and-letters}/pub?output=csv

Additions or changes to the spreadsheet will appear on a refreshed map somewhere between immediately and a few minutes later.

You should plan on only having 1 tab in the spreadsheet. However, if for some reason you want to point at the data in the second tab within the spreadsheet then open that tab in you browser and look in the URL for *gid=##########*. You would need to append ``&gid={your-tabs-gid-here}&single=true`` to the end of the CSV URL above to target that tab.

### Allowing Other People to Help Curate the Data

Use Google's *Share* function to give *Edit* permissions. You should consider allowing "Anyone with the link" to edit the data and then all you need to do is share the edit URL with trusted people.

### Using PHP to Convert a Google Sheets CSV to a GeoJSON File
The "CSV data source URL" to be used in the geojson.php PHP script is the URL from the "File -> Publish to Web" step

ex. ``https://docs.google.com/spreadsheets/d/{a-bunch-of-random-numbers-and-letters}/pub?output=csv``

Insert that URL in the $googleSpreadsheetUrl variable near the top of geojson.php file in your editor / workspace.

The column values are used in this example to generate the GeoJSON are hard-coded to include 4 fields: longitude, latitude, title, and notes.

If you need more columns / fields to your spreadsheet then you can add additional *properties* in your geojson.php under the ``$features['properties']`` array section and then include them in the map pop-up bubble by modifying the ``popuphtml`` variable within index.html 

You'd be best not to change order of the latitude and longitude columns in the spreadsheet.  If you must change the order then you'd need to modify the corresponding code in geojson.php and index.html

### Getting Longitude and Latitude

Non-programming / manual ways to get latitude and longitude numbers
* (Easiest) Go to MapQuest, zoom in and center the position you want in the middle of the map and right click on the spot you want. The pop-up will show the lat and long.
* (OK) In Google Maps zoom into a point. The URL in your browser will contain the center point's latitude and longitude (in that order) ex: 34.8509174,-82.3987371
* (Hard, but good for looking up lots of data) If you know how to do custom functions in Google Sheets then you can [convert an address into latitude and longitude](https://ctrlq.org/code/19992-google-maps-functions-for-google-script) with some customization.

### Rendering a Leaflet Map Showing the GeoJSON Data
The index.html is where you look to see the actual map. There is already a line of code to load the geojson.php into a ``$geoJsonData`` Javascript variable and render that to the Leaflet map. So, all you have to do is open the index.html in your browser.

[Leaflet JS can use many different providers of map tiles](https://github.com/leaflet-extras/leaflet-providers). Though, each provider has it's own pricing and limitations. This project initially used MapQuest raster tiles, but the current version uses a free OpenStreetMap tile server (for very low volume use cases). 

Please read each provider's documentation and pricing. Many have a free tier, but they may only be allowed for non-commercial use.

Also, each provider should have different documentation for applying their map tiles, so this example code may not work without notable changes to the section of the Javascript the connects the map tiles to the map.

### Testing
The geojson.php file will need a running "server" in order to process.  You can use a locally running server PHP server, including [PHP's built-in server](https://www.php.net/manual/en/features.commandline.webserver.php). Or, any web server, like Apache or Nginx, can be configured to process PHP files.

### Multiple Layers and Advanced Leaflet
[Leaflet has a bunch of other plug-ins and options](https://leafletjs.com/index.html), so the maps can be tweaked in all sorts of ways.

----
Original concept from [OpenData Day 2014 in Greenville SC](https://github.com/OpenUpstate/OpenDataDay2014)
