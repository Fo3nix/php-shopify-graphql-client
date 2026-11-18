<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyOrderFulfillmentsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $query;

    /**
     * Truncate the array result to this size.
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Optional query string to filter fulfillments by timestamps. Examples:
     * `created_at:>='2024-05-07T08:37:00Z' updated_at:<'2025-05-07T08:37:00Z'`,
     * `created_at:'2024-05-07T08:37:00Z'`
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
