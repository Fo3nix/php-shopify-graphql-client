<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldDefinitionPinArgumentsObject extends ArgumentsObject
{
    protected $definitionId;
    protected $identifier;

    /**
     * The id of the metafield definition to pin. Using `identifier` is preferred.
     */
    public function setDefinitionId($definitionId): static
    {
        $this->definitionId = $definitionId;

        return $this;
    }

    /**
     * The identifier of the metafield definition to pin.
     */
    public function setIdentifier(ShopifyMetafieldDefinitionIdentifierInputInputObject $shopifyMetafieldDefinitionIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyMetafieldDefinitionIdentifierInputInputObject;

        return $this;
    }
}
