<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating SMS marketing consent information for a given customer ID.
 */
class ShopifyCustomerSmsMarketingConsentUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["customerId", "smsMarketingConsent"];

    protected $customerId;
    protected $smsMarketingConsent;

    /**
     * The ID of the customer to update the SMS marketing consent information for. The customer must have a unique phone number associated to the record. If not, add the phone number using the `customerUpdate` mutation first.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The marketing consent information when the customer consented to receiving marketing material by SMS.
     */
    public function setSmsMarketingConsent(ShopifyCustomerSmsMarketingConsentInputInputObject $shopifyCustomerSmsMarketingConsentInputInputObject): static
    {
        $this->smsMarketingConsent = $shopifyCustomerSmsMarketingConsentInputInputObject;

        return $this;
    }
}
