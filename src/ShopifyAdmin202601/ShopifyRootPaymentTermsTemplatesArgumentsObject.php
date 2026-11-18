<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootPaymentTermsTemplatesArgumentsObject extends ArgumentsObject
{
    protected $paymentTermsType;

    /**
     * The payment terms type to filter the payment terms templates list.
     */
    public function setPaymentTermsType($shopifyPaymentTermsType): static
    {
        $this->paymentTermsType = new RawObject($shopifyPaymentTermsType);

        return $this;
    }
}
