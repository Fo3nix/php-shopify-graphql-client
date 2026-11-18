<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Custom reason code.
 */
class ShopifyCashManagementCustomReasonCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementCustomReasonCode";

    /**
     * The code for the custom reason code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
