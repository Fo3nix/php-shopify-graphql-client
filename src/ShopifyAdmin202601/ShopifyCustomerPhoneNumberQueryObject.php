<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A phone number.
 */
class ShopifyCustomerPhoneNumberQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPhoneNumber";

    /**
     * The source from which the SMS marketing information for the customer was collected.
     *
     * @deprecated Use `smsMarketingConsent.collectedFrom` instead.
     */
    public function selectMarketingCollectedFrom(): static
    {
        $this->selectField("marketingCollectedFrom");

        return $this;
    }

    /**
     * The marketing subscription opt-in level, as described by the M3AAWG best practices guidelines,
     * received when the marketing consent was updated.
     *
     * @deprecated Use `smsMarketingConsent.optInLevel` instead.
     */
    public function selectMarketingOptInLevel(): static
    {
        $this->selectField("marketingOptInLevel");

        return $this;
    }

    /**
     * Whether the customer has subscribed to SMS marketing material.
     *
     * @deprecated Use `smsMarketingConsent.state` instead.
     */
    public function selectMarketingState(): static
    {
        $this->selectField("marketingState");

        return $this;
    }

    /**
     * The date and time at which the marketing consent was updated.
     *
     * No date is provided if the email address never updated its marketing consent.
     *
     * @deprecated Use `smsMarketingConsent.updatedAt` instead.
     */
    public function selectMarketingUpdatedAt(): static
    {
        $this->selectField("marketingUpdatedAt");

        return $this;
    }

    /**
     * A customer's phone number.
     */
    public function selectPhoneNumber(): static
    {
        $this->selectField("phoneNumber");

        return $this;
    }

    /**
     * The location where the customer consented to receive marketing material by SMS.
     *
     * @deprecated Use `smsMarketingConsent.sourceLocation` instead.
     */
    public function selectSourceLocation(?ShopifyCustomerPhoneNumberSourceLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
