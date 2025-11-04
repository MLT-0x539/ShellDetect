<?php
error_reporting(0);
function size_readable($size, $max = null, $system = 'si', $retstring = '%01.2f %s')
{
    $systems['si']['prefix'] = array('B', 'K', 'MB', 'GB', 'TB', 'PB');
    $systems['si']['size']   = 1000;
    $systems['bi']['prefix'] = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB');
    $systems['bi']['size']   = 1024;
    $sys = isset($systems[$system]) ? $systems[$system] : $systems['si'];
    $depth = count($sys['prefix']) - 1;
	
    if ($max && false !== $d = array_search($max, $sys['prefix'])) {
        $depth = $d;
    }
 
    $i = 0;
    while ($size >= $sys['size'] && $i < $depth) {
        $size /= $sys['size'];
        $i++;
    }
    return sprintf($retstring, $size, $sys['prefix'][$i]);
}
?>
