<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFileUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["files"];

    protected $files;

    /**
     * List of files to be updated.
     */
    public function setFiles(array $files): static
    {
        $this->files = $files;

        return $this;
    }
}
