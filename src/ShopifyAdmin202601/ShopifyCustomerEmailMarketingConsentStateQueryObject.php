<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The record of when a customer consented to receive marketing material by email.
 */
class ShopifyCustomerEmailMarketingConsentStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerEmailMarketingConsentState";

    /**
     * The date and time at which the customer consented to receive marketing material by email.
     * The customer's consent state reflects the consent record with the most recent `consent_updated_at` date.
     * If no date is provided, then the date and time at which the consent information was sent is used.
     */
    public function selectConsentUpdatedAt(): static
    {
        $this->selectField("consentUpdatedAt");

        return $this;
    }

    /**
     * The marketing subscription opt-in level, as described by the M3AAWG best practices guidelines,
     * that the customer gave when they consented to receive marketing material by email.
     */
    public function selectMarketingOptInLevel(): static
    {
        $this->selectField("marketingOptInLevel");

        return $this;
    }

    /**
     * The current email marketing state for the customer.
     */
    public function selectMarketingState(): static
    {
        $this->selectField("marketingState");

        return $this;
    }

    /**
     * The location where the customer consented to receive marketing material by email.
     */
    public function selectSourceLocation(?ShopifyCustomerEmailMarketingConsentStateSourceLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
