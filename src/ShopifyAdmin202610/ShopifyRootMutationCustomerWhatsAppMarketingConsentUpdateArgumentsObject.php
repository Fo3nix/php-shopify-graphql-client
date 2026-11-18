<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerWhatsAppMarketingConsentUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the input fields to update a customer's WhatsApp marketing consent information.
     */
    public function setInput(ShopifyCustomerWhatsAppMarketingConsentUpdateInputInputObject $shopifyCustomerWhatsAppMarketingConsentUpdateInputInputObject): static
    {
        $this->input = $shopifyCustomerWhatsAppMarketingConsentUpdateInputInputObject;

        return $this;
    }
}
