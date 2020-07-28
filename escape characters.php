<?php
$text="She wrote upon it,\"Please return to the owner\".";

// echo $text;
// echo "heheen
//         hehehehe
//         hrheheh
// ";

$author = "Steve Ballmer"; 
// echo "Developers, developers, developers, developers, developers,  developers, developers, developers, developers!  - $author.";

$text="\tMeasuring programming progress by writing code
        is like measuring aircraft progress by meauring weight
        
        - $author";

// echo $text;

// echo <<<_END
// Debugging is twice as hard as programming, therefore if you write code cleverly, it is very hard to
// debug it.

// -$author
// _END

$out=<<<_END
Normal people think if it aint broke, dont fix it.
Engineers think if if aint broke, it doesnt have enough features yet.

-$author
_END;

echo $out;
?>
