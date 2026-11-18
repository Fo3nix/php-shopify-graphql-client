<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The marketing consent information when the customer consented to
 *         receiving marketing material by SMS.
 */
class ShopifyCustomerSmsMarketingConsentInputInputObject extends InputObject
{
    const REQUIRED = ["marketingState"];

    protected $marketingOptInLevel;
    protected $marketingState;
    protected $consentUpdatedAt;
    protected $sourceLocationId;

    /**
     * The marketing subscription opt-in level that was set when the customer consented to receive marketing information.
     */
    public function setMarketingOptInLevel($shopifyCustomerMarketingOptInLevel): static
    {
        $this->marketingOptInLevel = new RawObject($shopifyCustomerMarketingOptInLevel);

        return $this;
    }

    /**
     * The current SMS marketing state for the customer.
     */
    public function setMarketingState($shopifyCustomerSmsMarketingState): static
    {
        $this->marketingState = new RawObject($shopifyCustomerSmsMarketingState);

        return $this;
    }

    /**
     * The date and time when the customer consented to receive marketing material by SMS.
     * If no date is provided, then the date and time when the consent information was sent is used.
     */
    public function setConsentUpdatedAt($consentUpdatedAt): static
    {
        $this->consentUpdatedAt = $consentUpdatedAt;

        return $this;
    }

    /**
     * Identifies the location where the customer consented to receiving marketing material by SMS.
     */
    public function setSourceLocationId($sourceLocationId): static
    {
        $this->sourceLocationId = $sourceLocationId;

        return $this;
    }
}
