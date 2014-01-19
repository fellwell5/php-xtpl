<?php

namespace Xtpl\Extensions\Bootstrap;

class TitleElement extends Element {

    public function __construct( array $attributes = array() ) {
        parent::__construct( 'TITLE', $attributes );
    }

    public function process() {

        if( !$this->isProcessed() ) {

            if( ( $this->getParent() instanceof HeaderElement || $this->getParent() instanceof FooterElement )
               && $this->getParent()->getParent() instanceof PanelElement ) {

                $size = 4;
                if( $this->hasAttribute( 'SIZE' ) ) {
                    $this->ignoreAttribute( 'SIZE' );
                    $size = intval( $this->getAttribute( 'SIZE' ) );
                }

                $this->setTagName( "H$size" );
                $this->addClass( 'panel-title' );
            }
        }

        return parent::process();
    }
}