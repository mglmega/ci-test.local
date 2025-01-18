<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryMod extends Model
{
    protected $table            = 'category';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\Category::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name' => [
            'rules' => 'required|min_length[2]|max_length[255]',
            'label' => 'Category name',
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['beforeInsert'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['beforeUpdate'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = ['beforeDelete'];
    protected $afterDelete    = [];


    protected function beforeInsert(array $data)
    {
        helper('number');
        $data['data']['created_user'] = rand(1, 10);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        helper('number');
        // $data['data']['updated_at'] = date('Y-m-d H:i:s');
        $data['data']['updated_user'] = rand(1, 10);
        return $data;
    }

    protected function beforeDelete(array $data)
    {
        helper('number');
        $data['data']['deleted_user'] = rand(1, 10);
        return $data;
    }
}
