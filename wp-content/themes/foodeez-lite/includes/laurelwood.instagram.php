<?php 
// include Instagram class
include_once('/var/www/vhosts/laurelwoodbrewpub.com/beer/wp-content/themes/foodeez-lite/includes/instagram.class.php');

// pickSome function: pass array and number of items to return
// array gets shuffled and returns number of items from array specified
function pickSome($arr, $n=1) {
  shuffle($arr);
  while (list($key, $val) = each($arr)) {
    if ($n >= 1) {
      $returnArr[] = $val; 
      $n--;
    }
  }
  return $returnArr;
} // end pickSome fn()


// showInstagramGrid: pass a string tag and number of media items to return
// output is a grid of Instagram media photos inside syled bullet tags
function showInstagramGrid( $tag="laurelwoodbrewingco", $max=12, $randomize=true ) {
  
  // set API key
  $apiKey = '3b80c28fb4fd4babbbd25102b1700d76';
  // initialize Instagram class
  $instagram = new Instagram($apiKey);
  // set the Instagram tag to search
  // Get recently tagged media
  $media = $instagram->getTagMedia($tag);
  // build a sortable (by likes) multidimentional array of media items
  foreach ($media->data as $data) {
    $imageThumbnail = $data->images->thumbnail->url;
    $imageID = $data->id;
    $imageURL = $data->link;
    $imageLikes = $data->likes->count;
    $arrInstagram[$imageLikes][] = array( "likes"=>$imageLikes, "url"=>$imageURL, "thumb"=>$imageThumbnail );
  }

  // how many got returned?
  $n = count($arrInstagram);

  // sort the array by likes
  arsort($arrInstagram);  

  if ($randomize) {
    // determine number of chunks to break the array into  
    switch ($n) {
      case $n <= 20 && $n > 15: $chunksize = 5; $cr1 = 3; $cr2 = 3; $cr3 = 1; break; // between 16 - 20
      case $n <= 15 && $n > 12: $chunksize = 4; $cr1 = 4; $cr2 = 3; $cr3 = 1; break; // between 13 - 15
      case $n <= 12 && $n > 0:  $chunksize = 3; $cr1 = 3; $cr2 = 3; $cr3 = 3; break; // between 1 - 12
    }
    // break up the array in to chunks depending on the number of items returned
    $arrChunks = array_chunk($arrInstagram, $chunksize, true);
    // fetch the most liked first
    $arrMostLiked = $arrChunks[0];
    // randomly pull 3 from each remaining chunk
    $arrRnd1 = pickSome($arrChunks[1], $cr1);
    $arrRnd2 = pickSome($arrChunks[2], $cr2);
    $arrRnd3 = pickSome($arrChunks[3], $cr3);
    // merge all three arrays and shuffle
    $arrInsta = array_merge($arrMostLiked, $arrRnd1, $arrRnd2, $arrRnd3);
    // shuffle merged array
    shuffle($arrInsta);
  } else {
    // just pull in the top # liked
    $arrInsta = $arrInstagram;
  }
  
  // we should now have 12 total
  $c = 1;
  // $max = 12;
  // display results ?>
  <div class="insta-div">
  <ul class="insta-grid">
  <?php
  foreach ($arrInsta as $arrBlock) {
    foreach ($arrBlock as $insta) {
      if ($c <= $max) {
        ?>
        <li>
          <a href="<?php echo $insta[url] ?>" target="_blank"><span class="insta-likes"><?php echo $insta[likes]; ?>&#10084;</span><img src="<?php echo $insta[thumb] ?>"></a>
        </li>
        <?php
        $c++;
      }
    }
  } ?>
</ul>
</div>
<?php
} // end showInstagramGrid fn()

// fetchInstagramGrid: pass a string tag and number of media items to return
// output is a grid of Instagram media photos inside syled bullet tags
function fetchInstagramGrid( $tag="laurelwoodbrewingco", $max=12, $randomize=true ) {
  
  // set API key
  $apiKey = '3b80c28fb4fd4babbbd25102b1700d76';
  // initialize Instagram class
  $instagram = new Instagram($apiKey);
  // set the Instagram tag to search
  // $tag = 'wearewildfang';
  // Get recently tagged media
  $media = $instagram->getTagMedia($tag);
  
  // build a sortable (by likes) multidimentional array of media items
  foreach ($media->data as $data) {
    $imageThumbnail = $data->images->thumbnail->url;
    $imageID = $data->id;
    $imageURL = $data->link;
    $imageLikes = $data->likes->count;
    $arrInstagram[$imageLikes][] = array( "likes"=>$imageLikes, "url"=>$imageURL, "thumb"=>$imageThumbnail );
  }

  // how many got returned?
  $n = count($arrInstagram);

  // sort the array by likes
  arsort($arrInstagram);  

  if ($randomize) {
    // determine number of chunks to break the array into  
    switch ($n) {
      case $n <= 20 && $n > 15: $chunksize = 5; $cr1 = 3; $cr2 = 3; $cr3 = 1; break; // between 16 - 20
      case $n <= 15 && $n > 12: $chunksize = 4; $cr1 = 4; $cr2 = 3; $cr3 = 1; break; // between 13 - 15
      case $n <= 12 && $n > 0:  $chunksize = 3; $cr1 = 3; $cr2 = 3; $cr3 = 3; break; // between 1 - 12
    }
    // break up the array in to chunks depending on the number of items returned
    $arrChunks = array_chunk($arrInstagram, $chunksize, true);
    // fetch the most liked first
    $arrMostLiked = $arrChunks[0];
    // randomly pull 3 from each remaining chunk
    $arrRnd1 = pickSome($arrChunks[1], $cr1);
    $arrRnd2 = pickSome($arrChunks[2], $cr2);
    $arrRnd3 = pickSome($arrChunks[3], $cr3);
    // merge all three arrays and shuffle
    $arrInsta = array_merge($arrMostLiked, $arrRnd1, $arrRnd2, $arrRnd3);
    // shuffle merged array
    shuffle($arrInsta);
  } else {
    // just pull in the top # liked
    $arrInsta = $arrInstagram;
  }
  
  // we should now have 12 total
  $c = 1;
  // $max = 12;
  // return grid
  $grid = '<div class="insta-div"><ul class="insta-grid">';
  foreach ($arrInsta as $arrBlock) {
      foreach ($arrBlock as $insta) {
      if ($c <= $max) {
        $grid .= '<li><a href="'.$insta[url].'" target="_blank"><span class="insta-likes">'.$insta[likes].'&#10084;</span><img src="'.$insta[thumb].'"></a></li>';        
        $c++;
      }
    }
  }
  $grid .= '</ul></div>';

  return $grid;
} // end fetchInstagramGrid fn()