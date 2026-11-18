<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A payment mandate with resource information, representing the permission
 * the owner of the payment instrument gives to the merchant to debit it
 * for specific resources (e.g., Order, Subscriptions).
 */
class ShopifyPaymentMandateResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandateResource";

    /**
     * The unique ID of the payment mandate. Matches the corresponding `CustomerPaymentMethod.id` token, so partners can identify which payment method to use for a given mandate scope (e.g., SUBSCRIPTIONS).
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The ID of the resource that this payment method was created for.
     */
    public function selectResourceId(): static
    {
        $this->selectField("resourceId");

        return $this;
    }

    /**
     * The resource type that this payment method was created for (e.g., Order, Subscriptions).
     */
    public function selectResourceType(): static
    {
        $this->selectField("resourceType");

        return $this;
    }
}
