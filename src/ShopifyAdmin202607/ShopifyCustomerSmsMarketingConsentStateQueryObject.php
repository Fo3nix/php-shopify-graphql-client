<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The record of when a customer consented to receive marketing material by SMS.
 *
 * The customer's consent state reflects the record with the most recent date when consent was updated.
 */
class ShopifyCustomerSmsMarketingConsentStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSmsMarketingConsentState";

    /**
     * The source from which the SMS marketing information for the customer was collected.
     */
    public function selectConsentCollectedFrom(): static
    {
        $this->selectField("consentCollectedFrom");

        return $this;
    }

    /**
     * The date and time when the customer consented to receive marketing material by SMS.
     * If no date is provided, then the date and time when the consent information was sent is used.
     */
    public function selectConsentUpdatedAt(): static
    {
        $this->selectField("consentUpdatedAt");

        return $this;
    }

    /**
     * The marketing subscription opt-in level that was set when the customer consented to receive marketing information.
     */
    public function selectMarketingOptInLevel(): static
    {
        $this->selectField("marketingOptInLevel");

        return $this;
    }

    /**
     * The current SMS marketing state for the customer.
     */
    public function selectMarketingState(): static
    {
        $this->selectField("marketingState");

        return $this;
    }

    /**
     * The location where the customer consented to receive marketing material by SMS.
     */
    public function selectSourceLocation(?ShopifyCustomerSmsMarketingConsentStateSourceLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
