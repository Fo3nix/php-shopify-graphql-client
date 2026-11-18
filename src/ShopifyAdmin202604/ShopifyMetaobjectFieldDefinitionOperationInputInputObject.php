<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for possible operations for modifying field definitions. Exactly one option is required.
 */
class ShopifyMetaobjectFieldDefinitionOperationInputInputObject extends InputObject
{
    protected $create;
    protected $update;
    protected $delete;

    /**
     * The input fields for creating a metaobject field definition.
     */
    public function setCreate(ShopifyMetaobjectFieldDefinitionCreateInputInputObject $shopifyMetaobjectFieldDefinitionCreateInputInputObject): static
    {
        $this->create = $shopifyMetaobjectFieldDefinitionCreateInputInputObject;

        return $this;
    }

    /**
     * The input fields for updating a metaobject field definition.
     */
    public function setUpdate(ShopifyMetaobjectFieldDefinitionUpdateInputInputObject $shopifyMetaobjectFieldDefinitionUpdateInputInputObject): static
    {
        $this->update = $shopifyMetaobjectFieldDefinitionUpdateInputInputObject;

        return $this;
    }

    /**
     * The input fields for deleting a metaobject field definition.
     */
    public function setDelete(ShopifyMetaobjectFieldDefinitionDeleteInputInputObject $shopifyMetaobjectFieldDefinitionDeleteInputInputObject): static
    {
        $this->delete = $shopifyMetaobjectFieldDefinitionDeleteInputInputObject;

        return $this;
    }
}
