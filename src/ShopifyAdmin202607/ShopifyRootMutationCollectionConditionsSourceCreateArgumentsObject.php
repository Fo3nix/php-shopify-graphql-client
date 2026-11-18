<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionConditionsSourceCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the source to create.
     */
    public function setInput(ShopifyCollectionCreateConditionsSourceInputInputObject $shopifyCollectionCreateConditionsSourceInputInputObject): static
    {
        $this->input = $shopifyCollectionCreateConditionsSourceInputInputObject;

        return $this;
    }
}
