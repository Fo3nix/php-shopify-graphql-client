<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentTermsCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["referenceId", "paymentTermsAttributes"];

    protected $referenceId;
    protected $paymentTermsAttributes;

    /**
     * Specifies the reference orderId to add the payment terms for.
     */
    public function setReferenceId($referenceId): static
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    /**
     * The attributes used to create the payment terms.
     */
    public function setPaymentTermsAttributes(ShopifyPaymentTermsCreateInputInputObject $shopifyPaymentTermsCreateInputInputObject): static
    {
        $this->paymentTermsAttributes = $shopifyPaymentTermsCreateInputInputObject;

        return $this;
    }
}
