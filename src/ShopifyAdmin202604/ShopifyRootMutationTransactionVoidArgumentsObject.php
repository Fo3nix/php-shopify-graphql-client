<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTransactionVoidArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["parentTransactionId"];

    protected $parentTransactionId;

    /**
     * An uncaptured authorization transaction.
     */
    public function setParentTransactionId($parentTransactionId): static
    {
        $this->parentTransactionId = $parentTransactionId;

        return $this;
    }
}
