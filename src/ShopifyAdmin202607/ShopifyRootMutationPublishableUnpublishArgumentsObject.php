<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPublishableUnpublishArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The resource to delete or update publications for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the input fields required to unpublish a resource.
     */
    public function setInput(array $input): static
    {
        $this->input = $input;

        return $this;
    }
}
