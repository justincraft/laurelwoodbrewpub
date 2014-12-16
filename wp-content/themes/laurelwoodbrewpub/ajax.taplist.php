<?php
// load in html dom parsing library
include_once("/var/www/vhosts/laurelwoodbrewpub.com/httpdocs/wp-content/themes/laurelwood/includes/simple_html_dom.php");

switch ($_GET['loc']) {
	case "ne": $url = "http://www.taplister.com/bars/446bc3a4f964a5205e331fe3/"; break;
	case "se": $url = "http://www.taplister.com/bars/50537988e412d3d72e4803c7"; break;
	case "bg": $url = "http://www.taplister.com/bars/4b5663ebf964a520610e28e3"; break;
	default: $url = "http://www.taplister.com/bars/446bc3a4f964a5205e331fe3/"; break;
}

// create html dom object
$html = file_get_html($url);

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

	// loop through multidimensional array of beers, abvs, and ibus
	while( list($key, $val) = each($arrBeers) ) {
		// unset stored variables
		unset($name,$abv,$ibu);
		// set beer name, replacing "Laurelwood" and bad custom (chalk) characters
		$name = str_replace('Laurelwood', '', $val['name']);
		$name = str_replace('Public House &amp; Brewery', '', $name);
		$name = str_replace('&#39;', "'", $name);
		$name = str_replace('#', '<span class="dechalk">#</span>', $name);
		// truncate name if longer than # chars
		$name = substr($name, 0, 90);
		// set beer abv, replacing "Laurelwood" and bad custom (chalk) characters
		$abv = str_replace('ABV:', '', $val['abv']);
		$abv = str_replace('%', '<span class="dechalk">%</span>', $abv);
		// set beer ibu, replacing "Laurelwood" and bad custom (chalk) characters
		$ibu = str_replace('IBU:', '', $val['ibu']);
		$ibu = str_replace('.0', '', $ibu);

		$taplist .= '<ul>';
		$taplist .= '<li class="beer">'.trim($name).'&nbsp;</li>';
		$taplist .= '<li class="abv">'.$abv.'&nbsp;</li>';
		$taplist .= '<li class="ibu">'.$ibu.'&nbsp;</li>';
		$taplist .= '</ul>';
	} // end loop

	print $taplist;
?>