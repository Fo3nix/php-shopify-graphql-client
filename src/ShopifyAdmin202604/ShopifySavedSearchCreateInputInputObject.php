<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create a saved search.
 */
class ShopifySavedSearchCreateInputInputObject extends InputObject
{
    const REQUIRED = ["resourceType", "name", "query"];

    protected $resourceType;
    protected $name;
    protected $query;

    /**
     * The type of resource this saved search is searching in.
     */
    public function setResourceType($shopifySearchResultType): static
    {
        $this->resourceType = new RawObject($shopifySearchResultType);

        return $this;
    }

    /**
     * A descriptive name of the saved search.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The query string of a saved search. This includes search terms and filters.
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
