<?php

namespace Xtpl\Extensions\Bootstrap;

class LiElement extends Element {

    public function __construct( array $attributes = array() ) {
        parent::__construct( 'LI', $attributes );
    }
}