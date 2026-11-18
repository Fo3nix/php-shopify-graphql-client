<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerSmsMarketingConsentUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the input fields to update a customer's SMS marketing consent information.
     */
    public function setInput(ShopifyCustomerSmsMarketingConsentUpdateInputInputObject $shopifyCustomerSmsMarketingConsentUpdateInputInputObject): static
    {
        $this->input = $shopifyCustomerSmsMarketingConsentUpdateInputInputObject;

        return $this;
    }
}
