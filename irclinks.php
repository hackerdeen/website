<?php define('IN_SITE', 1); $page = "IRC Links"; include('header.php'); ?>

<div class="container">
<section>
<div class="row">
<div class="col-md-12">
<h1>IRC Links</h1>

<p>These links are not chosen or endorsed by 57North, but are just those shared within the 57North IRC chat.
<small>Note: websites with vertical bars in the titles '|' kinda break this a bit.</small></p>

<?php

# https://wiki.57north.org.uk/index.php/Projects:Hackercat
# https://hackr.org.uk/~derecho/irclinks.txt


error_reporting(E_ALL);
ini_set('display_errors', 1);

#$ch =  curl_init('https://hackr.org.uk/~derecho/irclinks.txt');
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#$irc_links_all = curl_exec($ch);


$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$irc_links_all = file_get_contents("https://wcep4auo23pel2vp.onion.to/links.txt", false, stream_context_create($arrContextOptions));


#$irc_links_all = file_get_contents('https://hackr.org.uk/~derecho/irclinks.txt');

if ( $irc_links_all === FALSE ) {
    echo "file_get_contents is false<br/>";
}


#echo "<pre>" . $irc_links_all . "</pre>";

$irc_links_all = str_replace("Mentioned by: ", "", $irc_links_all);

$irc_links_array = explode( "\n", $irc_links_all );


#echo "<pre>" . print_r($irc_links_array) . "</pre>";

$irc_links = Array();


foreach ( $irc_links_array AS $irc_link_line ) {
    $irc_link_line_array = explode ( "|", $irc_link_line );
    
    if ( isset($irc_link_line_array[1]) ) { 
    
        $time = $irc_link_line_array[0];
        $time = strtotime($time);
        $time = date('l jS \of F Y h:ia', $time);
        
        $link = $irc_link_line_array[1];
        if (isset($irc_link_line_array[2])) {
            $name = $irc_link_line_array[2];
        } else {
            $name = $irc_link_line_array[1];
        }
        
        if ( isset($irc_link_line_array[3]) ) {
            $person = $irc_link_line_array[3];
        } else {
            $person = "unknown";
        }    
        
        $irc_links[] = Array(
                        "time" => $time,
                        "link" => $link,
                        "name" => $name,
                        "person" => $person,
                        "all" => $irc_link_line
                        );
                        
    }
}


# // Provides: <body text='black'>
#$bodytag = str_replace("Mentioned by: ", "", "<body text='%body%'>");




#echo "<pre>" . print_r($irc_links) . "</pre>";

# reverse the array, so newest at the top
$irc_links = array_reverse($irc_links);

#echo "<pre>" . print_r($irc_links, TRUE) . "</pre>";


foreach ( $irc_links AS $irc_link ) {
    echo "<p>\n";
    echo "  <a href=\"" . $irc_link['link'] . "\" target=\"_blank\" title=\"" . $irc_link['all'] . "\" >" . $irc_link['name'] . "</a>\n";
    echo " by " . $irc_link['person'] . " at " . $irc_link['time'] . " ";                      
    echo "</p>\n";                           
}

/*
echo "<table>\n";
foreach ( $irc_links AS $irc_link ) {
    echo "<tr>\n";
    echo "  <td>" . $irc_link=>name . "</td>\n";                   
    echo "  <td>" . $irc_link=>link . "</td>\n";                       
    echo "  <td>" . $irc_link=>time . "</td>\n";                   
    echo "  <td>" . $irc_link=>person . "</td>\n";    
    echo "</tr>\n";                           
}
echo "</table>\n";


*/


?>

</div>
</div>

</section>

</div><!-- container -->
<?php include('footer.php'); ?>
