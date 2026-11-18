<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The error blocking a customer merge.
 */
class ShopifyCustomerMergeErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeError";

    /**
     * The list of fields preventing the customer from being merged.
     */
    public function selectErrorFields(): static
    {
        $this->selectField("errorFields");

        return $this;
    }

    /**
     * The customer merge error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
