<?php
function make_head($the_title) {
    $return_html = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Righteous" rel="stylesheet">
    <link href=".\\css\\style.css" rel="stylesheet" type="text/css" >
    <meta charset="utf-8" />';
    $return_html = $return_html . '<title>' . $the_title . '</title>';
    return($return_html);
}
function make_header($the_title) {
    $pages = ["Home", "About", "Showcase", "Contact Me"];
    $return_html = '<header class="container"><div class="row"><h1 class="col-sm-4">' . $the_title . '</h1><nav class="col-sm-8 text-right">';
    foreach ($pages as $p) {
        $return_html = $return_html . '<p>' . $p . '</p>';
    }
    $return_html = $return_html . '</nav></div></header>';
    return($return_html);
};
function make_footer() {
    $image_names = ['email', 'etsy', 'facebook', 'instagram'];
    $return_html = '<footer class="container"><div class="row"><p class="col-sm-4">&copy; 2017 Thrillhouse Threads</p><ul class="col-sm-8">';
    $file_extension = '.png';
    $image_version = 0;
    foreach ($image_names as $i) {
        $return_html = $return_html . '<li><img src=".\\img\\' . $image_version . $i . $file_extension . '" alt="' . $i . '"></li>';
    }
    $return_html = $return_html . '</ul></div></footer>';
    return($return_html);
}; 
?>