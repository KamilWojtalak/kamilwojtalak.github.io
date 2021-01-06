<?php

function siema($start, $end, $step) {
    if( $start <= $end ) {

        if ( $step <= 0 ) {
            throw new LogicException('Step must be positive!');
        }

        for ($i = $start; $i <= $end; $i += $step) {
            yield $i;
        }
    } else {
        if ( $step >= 0 ) {
            throw new LogicException('Step must be negative!');
        }

        for ($i = $start; $i >= $end; $i += $step) {
            yield $i;
        }
    }
}

foreach ( siema(1, 10 , 2) as $item ) {
    echo "$item ";
}