<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the Online Store capability to control renderability on the Online Store.
 */
class ShopifyMetaobjectCapabilityDataOnlineStoreInputInputObject extends InputObject
{
    protected $templateSuffix;

    /**
     * The theme template used when viewing the metaobject in a store.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }
}
