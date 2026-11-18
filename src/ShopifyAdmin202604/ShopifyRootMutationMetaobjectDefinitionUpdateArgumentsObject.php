<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectDefinitionUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "definition"];

    protected $id;
    protected $definition;

    /**
     * The ID of the metaobject definition to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for updating a metaobject definition.
     */
    public function setDefinition(ShopifyMetaobjectDefinitionUpdateInputInputObject $shopifyMetaobjectDefinitionUpdateInputInputObject): static
    {
        $this->definition = $shopifyMetaobjectDefinitionUpdateInputInputObject;

        return $this;
    }
}
