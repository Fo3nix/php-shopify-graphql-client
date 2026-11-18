<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields of the Online Store capability.
 */
class ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreInputInputObject extends InputObject
{
    const REQUIRED = ["urlHandle"];

    protected $urlHandle;
    protected $createRedirects;

    /**
     * The URL handle for accessing pages of this metaobject type in the Online Store.
     */
    public function setUrlHandle($urlHandle): static
    {
        $this->urlHandle = $urlHandle;

        return $this;
    }

    /**
     * Whether to redirect published metaobjects automatically when the URL handle changes.
     */
    public function setCreateRedirects($createRedirects): static
    {
        $this->createRedirects = $createRedirects;

        return $this;
    }
}
