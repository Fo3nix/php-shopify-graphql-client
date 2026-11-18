<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMobilePlatformApplicationDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the Mobile Platform Application to be deleted.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
