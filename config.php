<?php
// Version 0.1
// Tyler Jefford (http://tylerjefford.com)



class Site {

    /**
     * Site Title
     * @var string
     */
    public $title = 'Panels - One page "CMS"';

    /**
     * Site Author
     * @var string
     */
    public $author = 'Your Name';

    /**
     * Site Description
     * @var string
     */
    public $description = 'A minimal onepage site using PHP to manage panels';

    public $GA ='UA-XXXXXXXX-X';

    /**
     * Panels to load on site
     * @var array
     */
    public $panels = [
        'Home Page' => ['#1cbbb4', 'panels/home.php'],
    ];
}
