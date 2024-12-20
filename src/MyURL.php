<?php

namespace Bastian\UrlSlugify;

use Cocur\Slugify\Slugify;

class myURL {
    function slugify($url, $link) {
        $slugify = new Slugify();

        return $url . "/" . $slugify->slugify($link);
    }
}