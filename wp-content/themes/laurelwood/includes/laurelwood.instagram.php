<?php 
// include Instagram class
include_once('/var/www/vhosts/laurelwoodbrewpub.com/httpdocs/wp-content/themes/laurelwood/includes/instagram.class.php');

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
function showInstagramGrid( $tag="laurelwoodbrewing", $max=12 ) {
  
  // set API key
  $apiKey = 'e272d1ac80264733826cee6790c74a77';
  // initialize Instagram class
  $instagram = new Instagram($apiKey);
  // set the Instagram tag to search
  // $tag = 'wearewildfang';
  // Get recently tagged media
  $media = $instagram->getTagMedia($tag, 20);
  
  // build a sortable (by likes) multidimentional array of media items
  foreach ($media->data as $data) {
    $imageThumbnail = $data->images->thumbnail->url;
    $imageID = $data->id;
    $imageURL = $data->link;
    $imageLikes = $data->likes->count;
    $arrInstagram[][$imageLikes] = array( "id"=>$imageID, "likes"=>$imageLikes, "url"=>$imageURL, "thumb"=>$imageThumbnail );
  }

  // sort the array by likes
  rsort($arrInstagram);

  // break up the array in to chunks
  $arrChunks = array_chunk($arrInstagram, 5, true);
  // fetch the 4 most liked
  $arrMostLiked = $arrChunks[0];
  // randomly pull 3 from each remaining chunk
  $arrRnd1 = pickSome($arrChunks[1], 3);
  $arrRnd2 = pickSome($arrChunks[2], 2);
  $arrRnd3 = pickSome($arrChunks[3], 2);
  
  // merge all three arrays and shuffle
  $arrInsta = array_merge($arrMostLiked, $arrRnd1, $arrRnd2, $arrRnd3);
  
  // shuffle merged array
  shuffle($arrInsta);
  // we should now have 12 total
  $c = 1;
  // $max = 12;
  // display results ?>
  <div class="insta-div">
  <ul class="insta-grid">
  <?php
  foreach ($arrInsta as $arrBlock) {
    if ($c <= $max) {
      foreach ($arrBlock as $insta) {
        ?>
        <li>
          <a href="<?php echo $insta[url] ?>" target="_blank"><span class="insta-likes"><?php echo $insta[likes]; ?>&#10084;</span><img src="<?php echo $insta[thumb] ?>"></a>
        </li>
        <?php
      }
      $c++;
    }
  } ?>
</ul>
</div>
<?php
} // end showInstagramGrid fn()