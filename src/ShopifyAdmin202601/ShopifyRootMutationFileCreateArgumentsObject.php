<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFileCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["files"];

    protected $files;

    /**
     * List of new files to be created.
     */
    public function setFiles(array $files): static
    {
        $this->files = $files;

        return $this;
    }
}
