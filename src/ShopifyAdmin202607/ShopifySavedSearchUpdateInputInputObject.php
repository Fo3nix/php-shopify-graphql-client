<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to update a saved search.
 */
class ShopifySavedSearchUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;
    protected $query;

    /**
     * ID of the saved search to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

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
     * The query string of a saved search. This included search terms and filters.
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
