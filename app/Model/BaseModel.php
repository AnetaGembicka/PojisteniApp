<?php

namespace App\Model;

use Nette,
    Nette\Utils\Strings;


abstract class BaseModel
{
    public $db;
    use \Nette\SmartObject;

    function __construct(Nette\Database\Context $connection)
    {
        $this->db = $connection;
    }

}
