<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSegmentCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["name", "query"];

    protected $name;
    protected $query;

    /**
     * The name of the segment to be created. Segment names must be unique.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A precise definition of the segment. The definition is composed of a combination of conditions on facts about customers such as `email_subscription_status = 'SUBSCRIBED'` with [this syntax](https://shopify.dev/api/shopifyql/segment-query-language-reference).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
