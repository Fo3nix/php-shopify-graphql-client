<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFileAcknowledgeUpdateFailedArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fileIds"];

    protected $fileIds;

    /**
     * Specifies the file(s) to acknowledge the failed updates of.
     */
    public function setFileIds(array $fileIds): static
    {
        $this->fileIds = $fileIds;

        return $this;
    }
}
