<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for metaobject capabilities.
 */
class ShopifyMetaobjectCapabilityDataInputInputObject extends InputObject
{
    protected $publishable;
    protected $onlineStore;

    /**
     * Publishable capability input.
     */
    public function setPublishable(ShopifyMetaobjectCapabilityDataPublishableInputInputObject $shopifyMetaobjectCapabilityDataPublishableInputInputObject): static
    {
        $this->publishable = $shopifyMetaobjectCapabilityDataPublishableInputInputObject;

        return $this;
    }

    /**
     * Online Store capability input.
     */
    public function setOnlineStore(ShopifyMetaobjectCapabilityDataOnlineStoreInputInputObject $shopifyMetaobjectCapabilityDataOnlineStoreInputInputObject): static
    {
        $this->onlineStore = $shopifyMetaobjectCapabilityDataOnlineStoreInputInputObject;

        return $this;
    }
}
