<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Provides updated fields for the customer. To set marketing consent, use the `customerEmailMarketingConsentUpdate` or `customerSmsMarketingConsentUpdate` mutations instead.
     */
    public function setInput(ShopifyCustomerInputInputObject $shopifyCustomerInputInputObject): static
    {
        $this->input = $shopifyCustomerInputInputObject;

        return $this;
    }
}
