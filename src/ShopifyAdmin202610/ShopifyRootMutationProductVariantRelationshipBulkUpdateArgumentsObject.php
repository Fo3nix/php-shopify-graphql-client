<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantRelationshipBulkUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input options for the product variant being updated.
     */
    public function setInput(array $input): static
    {
        $this->input = $input;

        return $this;
    }
}
