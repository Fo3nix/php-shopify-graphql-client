<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootBusinessEntityArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * The ID of the Business Entity to return. Returns the primary Business Entity if not provided.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
