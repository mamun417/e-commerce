<?php

namespace App\Http\Controllers\Partial\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentHelper extends Controller
{
    public function getPaymentMethods(): array
    {
        return [
            'stripe',
            'paypal',
            'ideal',
            'handcash'
        ];
    }
}
