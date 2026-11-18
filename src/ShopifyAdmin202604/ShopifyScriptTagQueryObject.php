<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * <div class="note"><h4>Theme app extensions</h4>
 *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
 *
 *
 * A script tag represents remote JavaScript code that is loaded into the pages of a shop's storefront or the **Order status** page of checkout.
 */
class ShopifyScriptTagQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTag";

    /**
     * Whether the Shopify CDN can cache and serve the script tag.
     * If `true`, then the script will be cached and served by the CDN.
     * The cache expires 15 minutes after the script tag is successfully returned.
     * If `false`, then the script will be served as is.
     */
    public function selectCache(): static
    {
        $this->selectField("cache");

        return $this;
    }

    /**
     * The date and time when the script tag was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The page or pages on the online store that the script should be included.
     */
    public function selectDisplayScope(): static
    {
        $this->selectField("displayScope");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The URL to the remote script.
     */
    public function selectSrc(): static
    {
        $this->selectField("src");

        return $this;
    }

    /**
     * The date and time when the script tag was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
