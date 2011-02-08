<?php

/**
 * 
 * Project-01
 * Simon A Brown
 * ANM 293 Advance PHP - Brendan Howard
 * Tuesday 6pm - 9pm
 * 
 */

/**
 * 
 * output buffering beginning at start of file to store rendered page data into a variable
 *  until completely loaded before displaying page.
 */
ob_start();

/**
 * 
 * content that will be stored for output
 */
echo "My First Project with Output Buffering";


/**
 * 
 * variable to store buffered output data
 * @var unknown_type
 */
$v = ob_get_contents();


/**
 * 
 * clean out the buffer after variable is set with data
 */
ob_end_clean();


/**
 * 
 * display page content from set variable
 */
echo $v;