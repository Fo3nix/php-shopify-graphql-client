<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootPaymentTermsTemplatesArgumentsObject extends ArgumentsObject
{
    protected $paymentTermsType;

    public function setPaymentTermsType($paymentTermsType)
    {
        $this->paymentTermsType = new RawObject($paymentTermsType);

        return $this;
    }
}
