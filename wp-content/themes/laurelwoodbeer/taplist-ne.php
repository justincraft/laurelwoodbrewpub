<?php
// load in html dom parsing library
include_once("/var/www/vhosts/laurelwoodbrewpub.com/httpdocs/wp-content/themes/laurelwood/includes/simple_html_dom.php");

// create html dom object
$html = file_get_html("http://www.taplister.com/bars/446bc3a4f964a5205e331fe3/");

// initialize variables
$arrBeers = Array();
$n = 0;

// find the first instance of bar name
$pubName = $html->find('#bar_name',0)->innertext;
// parse html for beer information
foreach($html->find('div[id^=beer-]') as $div) {
	foreach($div->find('.beer-name') as $beerName) {
		$arrBeers[$n]['name'] = $beerName->innertext;
	}
	foreach($div->find('h4[style]') as $beerAttribute) {
		if (strpos("*".$beerAttribute, "ABV")>0) {
			$arrBeers[$n]['abv'] = $beerAttribute->innertext;
		}
		if (strpos("*".$beerAttribute, "IBU")>0) {
			$arrBeers[$n]['ibu'] = $beerAttribute->innertext;
		}
	}
	$n++; // increment counter
}

// used for display testing
//print_r($arrBeers);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Current Tap List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laurelwood Brewpub Current Tap List">
    <meta name="author" content="Laurelwood Brewpub">

    <!-- CSS -->
    <link href="/wp-content/themes/laurelwood/taplist.css" rel="stylesheet">
  </head>

  <body>

    <h2>ON TAP: NE Portland</h2>

		<ul>
			<li class="beer heading">Name</li>
			<li class="abv heading">ABV</li>
			<li class="ibu heading">IBU</li>
		</ul>

		<?php
			// loop through multidimensional array of beers, abvs, and ibus
			while( list($key, $val) = each($arrBeers) ) {
				// unset stored variables
				unset($name,$abv,$ibu);
				// set beer name, replacing "Laurelwood" and bad custom (chalk) characters
				$name = str_replace('Laurelwood', '', $val['name']);
				$name = str_replace('#', '<span class="dechalk">#</span>', $name);
				// set beer abv, replacing "Laurelwood" and bad custom (chalk) characters
				$abv = str_replace('ABV:', '', $val['abv']);
				$abv = str_replace('%', '<span class="dechalk">%</span>', $abv);
				// set beer ibu, replacing "Laurelwood" and bad custom (chalk) characters
				$ibu = str_replace('IBU:', '', $val['ibu']);
				$ibu = str_replace('.0', '', $ibu);
		?>
			<ul>
				<li class="beer"><?=$name."&nbsp;"?></li>
				<li class="abv"><?=$abv."&nbsp;"?></li>
				<li class="ibu"><?=$ibu."&nbsp;"?></li>
			</ul>
		<?php
			} // end loop
		?>
  </body>
</html>