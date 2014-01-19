<?php

namespace Xtpl\Extensions\Bootstrap\Media;

class BodyElement extends \Xtpl\Extensions\Bootstrap\DivElement {

    public function __construct( array $attributes = array() ) {
        parent::__construct( $attributes );

        $this->addClass( 'media-body' );
    }
}