<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields and values for creating a customer segment members query.
 */
class ShopifyCustomerSegmentMembersQueryInputInputObject extends InputObject
{
    protected $segmentId;
    protected $query;
    protected $reverse;
    protected $sortKey;

    /**
     * The ID of the segment.
     */
    public function setSegmentId($segmentId): static
    {
        $this->segmentId = $segmentId;

        return $this;
    }

    /**
     * The query that's used to filter the members. The query is composed of a combination of conditions on facts about customers such as `email_subscription_status = 'SUBSCRIBED'` with [this syntax](https://shopify.dev/api/shopifyql/segment-query-language-reference).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Reverse the order of the list. The sorting behaviour defaults to ascending order.
     */
    public function setReverse($reverse): static
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * Sort the list by a given key.
     */
    public function setSortKey($sortKey): static
    {
        $this->sortKey = $sortKey;

        return $this;
    }
}
