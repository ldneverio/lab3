<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'ldneverio_myguests';

    protected $allowedFields = ['name', 'email', 'comment'];


	 public function getGuest()
    {     
        return $this->findAll();
    }
}