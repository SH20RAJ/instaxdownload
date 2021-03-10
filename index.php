<?php
$img = "";
$html="";
if(isset($_GET['url'])) {
    $json = file_get_contents($_GET['url']."?__a=1") ;
    $json = json_decode($json);
    $img = $json->graphql->shortcode_media->display_url;
   // print_r();
    $aar = $json->graphql->shortcode_media->display_resources ;
    
    for($i=0;$i<count($aar);$i++ ) {
        $html .= '<img src="'.$aar[$i]->src.'" > <br><br> <a href="'.$aar[$i]->src.'" download >Download</a><hr>';
    }
} else {
    //
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaxDownload</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="url" id="">
        <button type="submit">GRAB</button>
    </form>
    <hr>
    <?php echo $html ; ?>
</body>
</html>
