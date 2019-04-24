<?php
return "
    <!DOCTYPE html>
    <html>
        <head> 
            <meta charset='utf-8'/>
            <title>$pageData->title</title>
               $pageData->css
	       $pageData->script
        </head>
        <body>
            $pageData->content
        </body>
    </html>";
?>