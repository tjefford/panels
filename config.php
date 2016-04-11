<?php
// Version 0.5
// Tyler Jefford (http://tylerjefford.com)

// Define your site path
define ('SitePath', 'http://localhost/panels-cms');

class Site {

    /**
     * Site Title
     * @var string
     */
    public $title = 'Panels - One Page Website System';

    /**
     * Site Author
     * @var string
     */
    public $author = 'Panels';

    /**
     * Site Description
     * @var string
     */
    public $description = 'A small, open-source website organization system made for easily managing single page websites.';

    /**
     * Google Analytics ID
     * @var string
     */
    public $GA ='UA-XXXXXXXX-X';

    /**
     * Panels to load on site
     * @var array
     */
    public $panels = [
        'Panels'                => ['#86AF9D', 'panels/home.php'],
        'About Panels'          => ['#F0C1F5', 'panels/about.php'],
        'Panels Config'         => ['#CA7FD1', 'panels/settings.php'],
        'Panels Options'        => ['#8D458F', 'panels/options.php'],
        'Open Source Software'  => ['#613B64', 'panels/open.php'],
    ];
}
