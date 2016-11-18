<?php

$startpath = ('./team');

$ritit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($startpath)); 

$r = array(); 

foreach ($ritit as $splFileInfo) { 
   $path = $splFileInfo->isDir() 
         ? array($splFileInfo->getFilename() => array()) 
         : array($splFileInfo->getFilename()); 

   for ($depth = $ritit->getDepth() - 1; $depth >= 0; $depth--) { 
       $path = array($ritit->getSubIterator($depth)->current()->getFilename() => $path); 
   } 

   $r = array_merge_recursive($r, $path); 
} 

print_r($r); 

?>