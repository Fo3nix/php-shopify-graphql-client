<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The selected delivery option on a subscription contract.
 */
class ShopifySubscriptionDeliveryMethodLocalDeliveryOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodLocalDeliveryOption";

    /**
     * A custom reference to the delivery method for use with automations.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The details displayed to the customer to describe the local delivery option.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The delivery instructions that the customer can provide to the merchant.
     */
    public function selectInstructions(): static
    {
        $this->selectField("instructions");

        return $this;
    }

    /**
     * The phone number that the customer provided to the merchant.
     * Formatted using E.164 standard. For example, `+16135551111`.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The presentment title of the local delivery option.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The title of the local delivery option.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
