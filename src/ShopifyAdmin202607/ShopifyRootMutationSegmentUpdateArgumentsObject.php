<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSegmentUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;
    protected $query;

    /**
     * Specifies the segment to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The new name for the segment.
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
