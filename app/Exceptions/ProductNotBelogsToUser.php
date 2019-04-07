<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelogsToUser extends Exception
{
    public function render()
    {
        return ['data' => 'product not Brlongs to User'];
    }
}
