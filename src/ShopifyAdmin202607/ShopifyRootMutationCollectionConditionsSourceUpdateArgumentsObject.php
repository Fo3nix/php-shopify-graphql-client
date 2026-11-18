<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionConditionsSourceUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the source to update.
     */
    public function setInput(ShopifyCollectionUpdateConditionsSourceInputInputObject $shopifyCollectionUpdateConditionsSourceInputInputObject): static
    {
        $this->input = $shopifyCollectionUpdateConditionsSourceInputInputObject;

        return $this;
    }
}
