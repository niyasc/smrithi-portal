<?php

    // configuration
    require("../includes/config.php"); 

    // render portfolio
    $news=query("select * from news order by date desc limit 5");
    render("home.php", ["title" => "Home Page","news"=>$news]);

?>
