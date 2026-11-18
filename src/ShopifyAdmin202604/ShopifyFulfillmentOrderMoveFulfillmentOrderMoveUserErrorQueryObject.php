<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a user error that occurs while moving a fulfillment order.
 */
class ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMoveFulfillmentOrderMoveUserError";

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
