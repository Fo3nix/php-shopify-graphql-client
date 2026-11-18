<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * System reason code.
 */
class ShopifyCashManagementSystemReasonCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementSystemReasonCode";

    /**
     * The code for the system reason code.
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
