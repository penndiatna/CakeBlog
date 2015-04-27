<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoryTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('categories');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('title', 'A title is required');
    }

}