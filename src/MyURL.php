<?php

namespace Bbrugger\MyTest;

use Cocur\Slugify\Slugify;

class MyURL {
    function slugify($url, $link) {
        $slugify = new Slugify();

        return $url . "/" . $slugify->slugify($link);
    }
}