<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPublishableUnpublishToCurrentChannelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The resource to delete or update publications for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
