<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticleTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('articles');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('title', 'A title is required')
            ->notEmpty('description', 'A description is required');
    }

}