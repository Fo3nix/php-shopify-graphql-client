<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Default reason code.
 */
class ShopifyCashManagementDefaultReasonCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementDefaultReasonCode";

    /**
     * The code for the default reason code.
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
