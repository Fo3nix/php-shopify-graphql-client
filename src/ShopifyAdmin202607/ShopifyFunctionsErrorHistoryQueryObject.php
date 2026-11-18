<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The error history from running a Shopify Function.
 */
class ShopifyFunctionsErrorHistoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "FunctionsErrorHistory";

    /**
     * The date and time that the first error occurred.
     */
    public function selectErrorsFirstOccurredAt(): static
    {
        $this->selectField("errorsFirstOccurredAt");

        return $this;
    }

    /**
     * The date and time that the first error occurred.
     */
    public function selectFirstOccurredAt(): static
    {
        $this->selectField("firstOccurredAt");

        return $this;
    }

    /**
     * Whether the merchant has shared all the recent errors with the developer.
     */
    public function selectHasBeenSharedSinceLastError(): static
    {
        $this->selectField("hasBeenSharedSinceLastError");

        return $this;
    }

    /**
     * Whether the merchant has shared all the recent errors with the developer.
     */
    public function selectHasSharedRecentErrors(): static
    {
        $this->selectField("hasSharedRecentErrors");

        return $this;
    }
}
