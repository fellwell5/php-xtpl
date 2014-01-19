<?php

error_reporting( E_ALL | E_STRICT );

require( 'vendor/autoload.php' );

//Initialize XTPL renderer
$xtpl = new Xtpl\Renderer( __DIR__.'/cache' );

//Just for demonstration, we actually disable caching.
$xtpl->setCacheInterval( 0 );

//Map bootstrap extensions!!
$xtpl->getCompiler()->getParser()->addElementNamespace( 'Xtpl\\Extensions\\Bootstrap' );

$xtpl->setBaseDirectory( __DIR__.'/templates' );

$xtpl->menu = array(
    'Features' => array(
        'Readme' => 'index.php?m=features&a=includes',
        'Blocks' => 'index.php?m=features&a=blocks',
        'Includes' => 'index.php?m=features&a=includes',
        'Extending' => 'index.php?m=features&a=extending',
        'Interpolation' => 'index.php?m=features&a=interpolation',
        'Inline PHP' => 'index.php?m=features&a=inline-php',
        'Loops' => 'index.php?m=features&a=loops',
        'Conditions' => 'index.php?m=features&a=conditions',
        'Custom Elements / Plugins' => 'index.php?m=features&a=custom-elements'
    ),
    'Examples' => array(
        'Blog' => 'index.php?m=examples&a=blog'
    ),
    'Extensions' => array(
        'Extensions Mapping' => 'index.php?m=extensions&a=extension-mapping',
        'Bootstrap' => 'index.php?m=extensions&a=bootstrap'
    ),
    'Bootstrap Extension' => array(
        'Buttons' => 'index.php?m=bootstrap-extension&a=buttons',
        'Forms' => 'index.php?m=bootstrap-extension&a=forms',
        'Grids' => 'index.php?m=bootstrap-extension&a=grids',
        'Misc' => 'index.php?m=bootstrap-extension&a=misc',
        'Navs' => 'index.php?m=bootstrap-extension&a=navs'
    )
);


//Load examples
$module = empty( $_GET[ 'm' ] ) ? 'features' : $_GET[ 'm' ];
$action = empty( $_GET[ 'a' ] ) ? 'includes' : $_GET[ 'a' ];

include "examples/$module/$action.php";