<?php
/** 
 * 
 * @My First Doc
 * @Simon Brown
 * @sbrown@skwidgets.com
 * 
 */

ob_start();

echo "My First Project with Output Buffering";

$_v = ob_get_contents();

ob_end_clean();

echo $_v;

