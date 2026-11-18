<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStagedUploadsCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The information required to generate staged upload targets.
     */
    public function setInput(array $input): static
    {
        $this->input = $input;

        return $this;
    }
}
