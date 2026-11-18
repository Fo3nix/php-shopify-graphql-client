<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A customer's email address with marketing consent. This includes the email address, marketing subscription status, and opt-in level according to [M3AAWG best practices guidelines](https://www.m3aawg.org/news/updated-m3aawg-best-practices-for-senders-urge-opt-in-only-mailings-address-sender-transparency).
 *
 * It also provides the timestamp of when customers last updated marketing consent and URLs for unsubscribing from marketing emails or opting in or out of email open tracking. The [`sourceLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerEmailAddress#field-CustomerEmailAddress.fields.sourceLocation) field indicates where the customer consented to receive marketing material.
 */
class ShopifyCustomerEmailAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerEmailAddress";

    /**
     * The customer's default email address.
     */
    public function selectEmailAddress(): static
    {
        $this->selectField("emailAddress");

        return $this;
    }

    /**
     * The marketing subscription opt-in level, as described by the M3AAWG best practices guidelines,
     * received when the marketing consent was updated.
     */
    public function selectMarketingOptInLevel(): static
    {
        $this->selectField("marketingOptInLevel");

        return $this;
    }

    /**
     * Whether the customer has subscribed to email marketing.
     */
    public function selectMarketingState(): static
    {
        $this->selectField("marketingState");

        return $this;
    }

    /**
     * The URL to unsubscribe a member from all mailing lists.
     */
    public function selectMarketingUnsubscribeUrl(): static
    {
        $this->selectField("marketingUnsubscribeUrl");

        return $this;
    }

    /**
     * The date and time at which the marketing consent was updated.
     *
     * No date is provided if the email address never updated its marketing consent.
     */
    public function selectMarketingUpdatedAt(): static
    {
        $this->selectField("marketingUpdatedAt");

        return $this;
    }

    /**
     * Whether the customer has opted in to having their opened emails tracked.
     */
    public function selectOpenTrackingLevel(): static
    {
        $this->selectField("openTrackingLevel");

        return $this;
    }

    /**
     * The URL that can be used to opt a customer in or out of email open tracking.
     */
    public function selectOpenTrackingUrl(): static
    {
        $this->selectField("openTrackingUrl");

        return $this;
    }

    /**
     * The location where the customer consented to receive marketing material by email.
     */
    public function selectSourceLocation(?ShopifyCustomerEmailAddressSourceLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the email address is formatted correctly.
     *
     * Returns `true` when the email is formatted correctly. This doesn't guarantee that the email address
     * actually exists.
     */
    public function selectValidFormat(): static
    {
        $this->selectField("validFormat");

        return $this;
    }
}
