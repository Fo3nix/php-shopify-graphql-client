<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a subscription contract status update error.
 */
class ShopifySubscriptionContractStatusUpdateUserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractStatusUpdateUserError";

    /**
     * The error code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The path to the input field that caused the error.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
