<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCommentNotSpamArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the comment to be marked as not spam.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
