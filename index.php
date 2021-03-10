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
    <h1>Instax - Instagram Downloader</h1>
    <form action="" method="get">
        <input type="text" name="url" id="" placeholder="https://www.instagram.com/p/CMM9uxALsjc/">
        <button type="submit">GRAB</button>
    </form>

    <div class="images">
       <?php echo $html ; ?> 
    </div>
    <style>
        *{
            padding : 8px;
            margin : 4px ;
            color : rgb(241, 85, 64);
        }
        a {
            text-decoration : none ;
            background : aqua ;
            display : inline-block;
            
        }
        body {
            text-align : center ;
            background: rgb(203, 238, 255);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        input ,button{
            background : none ;
            font-size: 35px ;
            border : 0;
            background: blanchedalmond;
            border-radius : 8px;
            outline:none ;

        }
        form {
        }
    </style>
    
</body>
</html>
