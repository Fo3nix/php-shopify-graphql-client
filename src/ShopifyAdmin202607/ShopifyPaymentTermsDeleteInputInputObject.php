<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to delete the payment terms.
 */
class ShopifyPaymentTermsDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["paymentTermsId"];

    protected $paymentTermsId;

    /**
     * The ID of the payment terms being deleted.
     */
    public function setPaymentTermsId($paymentTermsId): static
    {
        $this->paymentTermsId = $paymentTermsId;

        return $this;
    }
}
