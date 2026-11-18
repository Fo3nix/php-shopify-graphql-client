<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to update a customer's WhatsApp marketing consent information.
 */
class ShopifyCustomerWhatsAppMarketingConsentUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["customerId", "whatsAppMarketingConsent"];

    protected $customerId;
    protected $whatsAppMarketingConsent;

    /**
     * The ID of the [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) to update the WhatsApp marketing consent information for. The customer must have a unique phone number associated with their record. If not, then add the phone number using the [`customerUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerUpdate) mutation first.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The marketing consent information when the customer consented to receiving marketing material by WhatsApp.
     */
    public function setWhatsAppMarketingConsent(ShopifyCustomerMarketingConsentInputInputObject $shopifyCustomerMarketingConsentInputInputObject): static
    {
        $this->whatsAppMarketingConsent = $shopifyCustomerMarketingConsentInputInputObject;

        return $this;
    }
}
