<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update the payment terms.
 */
class ShopifyPaymentTermsUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["paymentTermsId", "paymentTermsAttributes"];

    protected $paymentTermsId;
    protected $paymentTermsAttributes;

    /**
     * The ID of the payment terms being updated.
     */
    public function setPaymentTermsId($paymentTermsId): static
    {
        $this->paymentTermsId = $paymentTermsId;

        return $this;
    }

    /**
     * The attributes used to update the payment terms.
     */
    public function setPaymentTermsAttributes(ShopifyPaymentTermsInputInputObject $shopifyPaymentTermsInputInputObject): static
    {
        $this->paymentTermsAttributes = $shopifyPaymentTermsInputInputObject;

        return $this;
    }
}
