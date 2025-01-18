<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Category extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    // public function setName(string $name)
    // {
    //     $this->attributes['name'] = $name . '-tag';
    // }

    public function getName(string $addText = ' - 123')
    {
        return $this->attributes['name'] . $addText;
    }

    public function insertInfo()
    {
        return 'admin-' . $this->attributes['created_user'] . ' inserted on ' . $this->attributes['created_at'];
    }
}
