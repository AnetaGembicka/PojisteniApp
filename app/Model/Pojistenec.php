<?php

namespace App\Model;

use Nette,
    Nette\Utils\Strings;

class Pojistenec extends BaseModel
{
   public function getData()
   {
     return $this->db->table('pojistenec');
   }

}

