<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Additional information about why a merchant declined the customer's return request.
 */
class ShopifyReturnDeclineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnDecline";

    /**
     * The notification message sent to the customer about their declined return request.
     * Maximum length: 500 characters.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The reason the customer's return request was declined.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }
}
