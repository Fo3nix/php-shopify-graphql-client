<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationValidationDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID representing the installed validation.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
