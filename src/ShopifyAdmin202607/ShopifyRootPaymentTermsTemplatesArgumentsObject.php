<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootPaymentTermsTemplatesArgumentsObject extends ArgumentsObject
{
    protected $paymentTermsType;

    public function setPaymentTermsType($shopifyPaymentTermsType)
    {
        $this->paymentTermsType = new RawObject($shopifyPaymentTermsType);

        return $this;
    }
}
