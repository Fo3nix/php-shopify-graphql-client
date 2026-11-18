<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a metaobject capability.
 */
class ShopifyMetaobjectCapabilityUpdateInputInputObject extends InputObject
{
    protected $publishable;
    protected $translatable;
    protected $renderable;
    protected $onlineStore;

    /**
     * The input for updating the publishable capability.
     */
    public function setPublishable(ShopifyMetaobjectCapabilityPublishableInputInputObject $shopifyMetaobjectCapabilityPublishableInputInputObject): static
    {
        $this->publishable = $shopifyMetaobjectCapabilityPublishableInputInputObject;

        return $this;
    }

    /**
     * The input for updating the translatable capability.
     */
    public function setTranslatable(ShopifyMetaobjectCapabilityTranslatableInputInputObject $shopifyMetaobjectCapabilityTranslatableInputInputObject): static
    {
        $this->translatable = $shopifyMetaobjectCapabilityTranslatableInputInputObject;

        return $this;
    }

    /**
     * The input for enabling the renderable capability.
     */
    public function setRenderable(ShopifyMetaobjectCapabilityRenderableInputInputObject $shopifyMetaobjectCapabilityRenderableInputInputObject): static
    {
        $this->renderable = $shopifyMetaobjectCapabilityRenderableInputInputObject;

        return $this;
    }

    /**
     * The input for enabling the Online Store capability.
     */
    public function setOnlineStore(ShopifyMetaobjectCapabilityOnlineStoreInputInputObject $shopifyMetaobjectCapabilityOnlineStoreInputInputObject): static
    {
        $this->onlineStore = $shopifyMetaobjectCapabilityOnlineStoreInputInputObject;

        return $this;
    }
}
