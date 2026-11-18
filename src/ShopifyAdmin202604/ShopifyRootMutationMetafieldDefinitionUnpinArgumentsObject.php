<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldDefinitionUnpinArgumentsObject extends ArgumentsObject
{
    protected $definitionId;
    protected $identifier;

    /**
     * The ID of the metafield definition to unpin. Using `identifier` is preferred.
     */
    public function setDefinitionId($definitionId): static
    {
        $this->definitionId = $definitionId;

        return $this;
    }

    /**
     * The identifier of the metafield definition to unpin.
     */
    public function setIdentifier(ShopifyMetafieldDefinitionIdentifierInputInputObject $shopifyMetafieldDefinitionIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyMetafieldDefinitionIdentifierInputInputObject;

        return $this;
    }
}
