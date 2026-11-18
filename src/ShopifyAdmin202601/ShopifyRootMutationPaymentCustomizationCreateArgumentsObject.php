<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentCustomizationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["paymentCustomization"];

    protected $paymentCustomization;

    /**
     * The input data used to create the payment customization.
     */
    public function setPaymentCustomization(ShopifyPaymentCustomizationInputInputObject $shopifyPaymentCustomizationInputInputObject): static
    {
        $this->paymentCustomization = $shopifyPaymentCustomizationInputInputObject;

        return $this;
    }
}
