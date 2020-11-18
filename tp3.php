<?php
function getHeader(?startSession,$title){
if($startSession){
   session-start();
   
   }?>
   <!doctype html>
   <html>
     <head>
     <meta charsert="utf-8">
     <title><?=$title?></title>
    </head>
<body>
<?php
}

function getFooter()[
?>
    </body>
</html>
<?php
}
]