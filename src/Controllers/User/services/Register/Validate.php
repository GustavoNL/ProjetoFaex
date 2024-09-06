<?php

namespace Gustavo\Students\Controllers\User\services\Register;

class Validate
{

    public function execute($data)
    {

        $success = true;

        foreach ($this->getFields() as $key => $field) {
        
            if ($field['required'] == false){
                
                continue;

            }

            if (!isset($data[$key]) || empty($data[$key])) {

                $success = false;

            }

        }

        return $success;

    }

    private function getFields()
    {

        return [

            'name' => [
                'required' => true
            ],
            'email' => [
                'required' => true
            ],
            'password' => [
                'required' => true
            ],
            'phone' => [
                'required' => true
            ],
        ];

    }
}