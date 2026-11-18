<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectDefinitionCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["definition"];

    protected $definition;

    /**
     * The input fields for creating a metaobject definition.
     */
    public function setDefinition(ShopifyMetaobjectDefinitionCreateInputInputObject $shopifyMetaobjectDefinitionCreateInputInputObject): static
    {
        $this->definition = $shopifyMetaobjectDefinitionCreateInputInputObject;

        return $this;
    }
}
