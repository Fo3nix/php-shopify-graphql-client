<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBulkOperationRunMutationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["mutation", "stagedUploadPath"];

    protected $mutation;
    protected $stagedUploadPath;
    protected $clientIdentifier;

    /**
     * The mutation to be executed in bulk.
     */
    public function setMutation($mutation): static
    {
        $this->mutation = $mutation;

        return $this;
    }

    /**
     * The staged upload path of the file containing mutation variables.
     */
    public function setStagedUploadPath($stagedUploadPath): static
    {
        $this->stagedUploadPath = $stagedUploadPath;

        return $this;
    }

    /**
     * An optional identifier for the bulk operation. Must be between 10 and 255 characters.
     */
    public function setClientIdentifier($clientIdentifier): static
    {
        $this->clientIdentifier = $clientIdentifier;

        return $this;
    }
}
