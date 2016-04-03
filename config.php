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

    /**
     * Google Analytics ID
     * @var string
     */
    public $GA ='UA-XXXXXXXX-X';

    /**
     * @var array
     */
    public $social = [
        'Twitter'   => 'yourname',
        'Facebook'  => 'yourname',
        'Instagram' => 'yourname',
        'Linkedin'  => 'yourname',
    ];

    /**
     * @return array|string
     */
    public function buildSocialJson()
    {
        $json = [];
        $url = $_SERVER['SERVER_NAME'];

        $website = [
            "@context"          => "http://schema.org",
            "@type"             => "WebSite",
            "url"               => "$url",
            "name"              => "$this->title",
            "potentialAction"   => [
                "@type"         => "SearchAction",
                "target"        => "$url/search?&q={query}",
                "query-input"   => "required name=search_term_string"
            ]
        ];
        //$website = json_encode($website);
        array_push($json, ['WebSite', $website]);

        $person = [
            "@context"  => "http://schema.org",
            "@type"     => "Person",
            "url"       => "$url",
            "sameAs"    => [
                'http://instagram.com/'.$this->social['Instagram'],
                'https://www.linkedin.com/in/'.$this->social['Linkedin'],
                'https://twitter.com/'.$this->social['Twitter'],
                'https://facebook.com/'.$this->social['Facebook']
            ],
            "name"      => "$this->author"
        ];
        //$person = json_encode($person);
        array_push($json, ['Person', $person]);

        $json = json_encode($json);

        return $json;
    }

    /**
     * @return string
     */
    public function socialMeta()
    {
        // Define Social media accounts

        $meta = '
            <meta property=og:locale content=en_US />
            <meta property=og:type content=website />
            <meta property=og:title content="'.$this->title.'"/>
            <meta property=og:description content="'.$this->description.'"/>
            <meta property=og:url content='.$_SERVER['SERVER_NAME'].' />
            <meta property=og:site_name content="'.$this->title.'"/>
            <meta name=twitter:card content="summary"/>
            <meta name=twitter:description content="'.$this->description.'"/>
            <meta name=twitter:title content="'.$this->title.'"/>
            <meta name=twitter:site content="@'.$this->social['Twitter'].'"/>
            <meta name=twitter:domain content="'.$this->title.'"/>
            <meta name=twitter:creator content="@'.$this->social['Twitter'].'"/>
        ';
        foreach (json_decode($this->buildSocialJson()) as $js){
            $meta .= '<script type=application/ld+json>'.json_encode($js[1]).'</script>';
        }

        return $meta;
    }

    /**
     * Panels to load on site
     * @var array
     */
    public $panels = [
        'Home Page' => ['#1cbbb4', 'panels/home.php'],
    ];
}
