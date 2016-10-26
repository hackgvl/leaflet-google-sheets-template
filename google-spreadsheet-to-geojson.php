<?php
// kudos to http://stackoverflow.com/a/18106727/1778785 for snippet of PHP to read Google spreadsheet as CSV
// http://stackoverflow.com/a/18106727/1778785

$googleSpreadsheetUrl = "https://docs.google.com/spreadsheet/pub?key=PASTEYOURGOOGLESHEETSKEYHERE&single=true&gid=0&output=csv";

$rowCount = 1;

// attempt to set the socket timeout, if it fails then echo an error
if(!ini_set('default_socket_timeout',    15))
{
  echo "<!-- unable to change socket timeout -->";
} // end if, set socket timeout

// if the opening the CSV file handler does not fail
if (($handle = fopen($googleSpreadsheetUrl, "r")) !== FALSE)
{

  // while CSV data rows
  while (($csvRow = fgetcsv($handle, 10000, ",")) !== FALSE)
  {
    if ($rowCount == 1) { continue; } // skip the first/header row of the CSV

    // store each row of the CSV in an associative array
    $geoJsonSourceData[]= array(
      'title' => $csvRow[0],
      'longitude' => $csvRow[1],
      'latitude' => $csvRow[2],
      'notes' => $csvRow[3],
    );
    $rowCount++;
  } // end while, loop through CSV data

  fclose($handle); // close the CSV file handler
}  // end if , read file handler opened

// else, file didn't open for reading
else
{
    die("Problem reading csv");
}  // end else, file open fail

// render JSON and no cache headers
header('Content-type: application/json; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Access-Control-Allow-Origin: *');
?>
{
  "type": "FeatureCollection",
  "features": [
<?php
	foreach ( $geoJsonSourceData AS $sourceRow  ) {
	  $rowCount--; // decrement the row counter
?>
      { "type": "Feature",
        "geometry": {"type": "Point", "coordinates": [<?php print $sourceRow['longitude'];?>, <?php print $sourceRow['latitude'];?>]},
        "properties": {
           "title" : <?php print json_encode($sourceRow['title']);?>,
           "notes": <?php print json_encode($sourceRow['notes']);?>
         }
    }<?php print ($rowCount > 1) ? ',' : ''; // only print a comma if it's not the last object in the JSON ?> 
<?php
	} // end foreach, row
?>
  ]
}
