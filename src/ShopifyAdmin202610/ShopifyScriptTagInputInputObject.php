<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a script tag. This input object is used when creating or updating
 * a script tag to specify its URL, where it should be included, and how it will be cached.
 */
class ShopifyScriptTagInputInputObject extends InputObject
{
    protected $src;
    protected $displayScope;
    protected $cache;

    /**
     * The URL of the remote script. For example: `https://example.com/path/to/script.js`.
     */
    public function setSrc($src): static
    {
        $this->src = $src;

        return $this;
    }

    /**
     * The page or pages on the online store where the script should be included.
     */
    public function setDisplayScope($shopifyScriptTagDisplayScope): static
    {
        $this->displayScope = new RawObject($shopifyScriptTagDisplayScope);

        return $this;
    }

    /**
     * Whether the Shopify CDN can cache and serve the script tag.
     * If `true`, then the script will be cached and served by the CDN.
     * The cache expires 15 minutes after the script tag is successfully returned.
     * If `false`, then the script is served as is.
     * The default value is `false`.
     */
    public function setCache($cache): static
    {
        $this->cache = $cache;

        return $this;
    }
}
