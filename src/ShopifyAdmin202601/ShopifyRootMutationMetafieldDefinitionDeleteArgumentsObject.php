<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldDefinitionDeleteArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $identifier;
    protected $deleteAllAssociatedMetafields;

    /**
     * The id of the metafield definition to delete. Using `identifier` is preferred.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The identifier of the metafield definition to delete.
     */
    public function setIdentifier(ShopifyMetafieldDefinitionIdentifierInputInputObject $shopifyMetafieldDefinitionIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyMetafieldDefinitionIdentifierInputInputObject;

        return $this;
    }

    /**
     * Whether to delete all associated metafields.
     */
    public function setDeleteAllAssociatedMetafields($deleteAllAssociatedMetafields): static
    {
        $this->deleteAllAssociatedMetafields = $deleteAllAssociatedMetafields;

        return $this;
    }
}
