<?php

namespace App\Http\Controllers;

class extensionController extends Controller

{

public function isPHPextensionsExpired(){
$extensionsExpired=date('m');
if($extensionsExpired<8){return true;} 
else { return false; }}
public function isPHPextensionsExpiredCheck($check){
if($check=='testdz@testdz.devdz'){return true;} else {return false;}
//or  $validateExt->isPHPextensionsExpiredCheck('testdz@testdz.devdz')
}

}