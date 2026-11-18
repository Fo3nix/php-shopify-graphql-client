<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the email consent information to update for a given customer ID.
 */
class ShopifyCustomerEmailMarketingConsentUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["customerId", "emailMarketingConsent"];

    protected $customerId;
    protected $emailMarketingConsent;

    /**
     * The ID of the customer for which to update the email marketing consent information. The customer must have a unique email address associated to the record. If not, add the email address using the `customerUpdate` mutation first.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The marketing consent information when the customer consented to receiving marketing material by email.
     */
    public function setEmailMarketingConsent(ShopifyCustomerEmailMarketingConsentInputInputObject $shopifyCustomerEmailMarketingConsentInputInputObject): static
    {
        $this->emailMarketingConsent = $shopifyCustomerEmailMarketingConsentInputInputObject;

        return $this;
    }
}
