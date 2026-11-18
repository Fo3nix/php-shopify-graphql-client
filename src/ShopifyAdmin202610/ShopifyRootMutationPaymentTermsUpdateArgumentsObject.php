<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentTermsUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields used to update the payment terms.
     */
    public function setInput(ShopifyPaymentTermsUpdateInputInputObject $shopifyPaymentTermsUpdateInputInputObject): static
    {
        $this->input = $shopifyPaymentTermsUpdateInputInputObject;

        return $this;
    }
}
