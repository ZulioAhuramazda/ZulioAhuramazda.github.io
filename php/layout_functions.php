<?php
function make_head($the_title) {
    $return_html = '<link href=".\\css\\style.css" rel="stylesheet" type="text/css" ><meta charset="utf-8" />';
    $return_html = $return_html . '<title>' . $the_title . '</title>';
    return($return_html);
}
function make_header() {
    $pages = ["Home", "About", "Showcase", "Contact Me"];
    $return_html = '<div class="header"><nav><ul>';
    foreach ($pages as $p) {
        $return_html = $return_html . '<li>' . $p . '</li>';
    }
    $return_html = $return_html . '</ul></nav></div>';
    return($return_html);
};
function make_footer() {
    $image_names = ['email', 'etsy', 'facebook', 'instagram'];
    $return_html = '<div class="footer"><nav><ul>';
    $file_extension = '.png';
    $image_version = 0;
    foreach ($image_names as $i) {
        $return_html = $return_html . '<li><img src=".\\img\\' . $image_version . $i . $file_extension . '" alt="' . $i . '"></li>';
    }
    $return_html = $return_html . '</ul></nav></div>';
    return($return_html);
}; 
?>