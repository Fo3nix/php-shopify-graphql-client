<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to claim ownership for Product features such as Bundles.
 */
class ShopifyProductClaimOwnershipInputInputObject extends InputObject
{
    protected $bundles;

    /**
     * Claiming ownership of bundles lets the app render a custom UI for the bundles' card on the
     * products details page in the Shopify admin.
     *
     * Bundle ownership can only be claimed when creating the product. If you create `ProductVariantComponents`
     * in any of its product variants, then the bundle ownership is automatically assigned to the app making the call.
     *
     * [Learn more](https://shopify.dev/docs/apps/selling-strategies/bundles/product-config).
     */
    public function setBundles($bundles): static
    {
        $this->bundles = $bundles;

        return $this;
    }
}
