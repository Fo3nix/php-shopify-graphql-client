<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating capabilities on a metaobject field definition.
 */
class ShopifyMetaobjectFieldDefinitionCapabilityCreateInputInputObject extends InputObject
{
    protected $adminFilterable;

    /**
     * The input for configuring the admin filterable capability.
     */
    public function setAdminFilterable(ShopifyMetaobjectFieldCapabilityAdminFilterableInputInputObject $shopifyMetaobjectFieldCapabilityAdminFilterableInputInputObject): static
    {
        $this->adminFilterable = $shopifyMetaobjectFieldCapabilityAdminFilterableInputInputObject;

        return $this;
    }
}
