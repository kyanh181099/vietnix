<?php 

namespace vietnixcachePlugin\Controller;

class Controller 
{

  public function view($name)
  {
    return require_once '/usr/local/cpanel/base/frontend/
    paper_lantern/vietnixcachePlugin/View/' . $name . '.php';
  }
}
 
