<?php

include "phpQuery.php";

function downloadIt($urlFull)
{
    $url = parse_url($urlFull, PHP_URL_HOST);
    switch($url)
    {
        case "www.instagram.com":
        {
            $doc = phpQuery::newDocumentFile($urlFull);
            $typePost = trim(strip_tags($doc->find("meta[property='og:type']")->attr('content')));
                    
            if($typePost == "video") 
            {
                $tag = trim(strip_tags($doc->find("meta[property='og:video:secure_url']")->attr('content')));
                echo "<div id='mediaDiv'><video class='img-fluid' width='450' height='450' autoplay controls> <source src='$tag' type='video/mp4'> </video></div>";          
            }
            else 
            {
                $tag = trim(strip_tags($doc->find("meta[property='og:image']")->attr('content')));
                echo "<div id='mediaDiv'><img class='img-fluid' src='$tag' height='450' width='450' alt='Image not Found'/></div>";
            }

            break;
        }
    }
}

?>