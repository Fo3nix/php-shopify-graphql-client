<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderAttributionDefinitionUpsertArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for upserting the order attribution definition.
     */
    public function setInput(ShopifyOrderAttributionDefinitionUpsertInputInputObject $shopifyOrderAttributionDefinitionUpsertInputInputObject): static
    {
        $this->input = $shopifyOrderAttributionDefinitionUpsertInputInputObject;

        return $this;
    }
}
