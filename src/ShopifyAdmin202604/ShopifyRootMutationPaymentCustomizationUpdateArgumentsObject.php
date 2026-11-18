<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentCustomizationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "paymentCustomization"];

    protected $id;
    protected $paymentCustomization;

    /**
     * The global ID of the payment customization.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the payment customization.
     */
    public function setPaymentCustomization(ShopifyPaymentCustomizationInputInputObject $shopifyPaymentCustomizationInputInputObject): static
    {
        $this->paymentCustomization = $shopifyPaymentCustomizationInputInputObject;

        return $this;
    }
}
