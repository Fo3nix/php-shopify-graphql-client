<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentTermsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields used to delete the payment terms.
     */
    public function setInput(ShopifyPaymentTermsDeleteInputInputObject $shopifyPaymentTermsDeleteInputInputObject): static
    {
        $this->input = $shopifyPaymentTermsDeleteInputInputObject;

        return $this;
    }
}
