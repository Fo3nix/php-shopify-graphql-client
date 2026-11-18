<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductResourceFeedbackArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The product associated with the resource feedback.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
