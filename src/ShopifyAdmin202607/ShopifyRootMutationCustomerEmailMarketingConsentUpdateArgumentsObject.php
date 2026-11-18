<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerEmailMarketingConsentUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the input fields to update a customer's email marketing consent information.
     */
    public function setInput(ShopifyCustomerEmailMarketingConsentUpdateInputInputObject $shopifyCustomerEmailMarketingConsentUpdateInputInputObject): static
    {
        $this->input = $shopifyCustomerEmailMarketingConsentUpdateInputInputObject;

        return $this;
    }
}
