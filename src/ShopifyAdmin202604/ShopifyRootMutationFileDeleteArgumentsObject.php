<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFileDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fileIds"];

    protected $fileIds;

    /**
     * The IDs of the files to be deleted.
     */
    public function setFileIds(array $fileIds): static
    {
        $this->fileIds = $fileIds;

        return $this;
    }
}
