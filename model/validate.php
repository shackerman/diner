<?php

//return true if food has at least two characters
function validFood($food)
{
    if(strlen($food ) > 2) {
        return false;
    }
    else {
        return true;
    }

    return strlen($food) > 2;
}