<?php
// src/Model/Table/UsersTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('name', 'A name is required.')
            ->maxLength('name', 255, 'Name must be no more than 255 characters long.')
            ->notEmptyString('password', 'A password is required.')
            ->minLength('password', 6, 'Password must be at least 6 characters long.');

        return $validator;
    }
}
