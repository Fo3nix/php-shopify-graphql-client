<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a font group. To learn more about updating fonts, refer to the
 * [checkoutBrandingUpsert](https://shopify.dev/api/admin-graphql/unstable/mutations/checkoutBrandingUpsert)
 * mutation and the checkout branding [tutorial](https://shopify.dev/docs/apps/checkout/styling).
 */
class ShopifyCheckoutBrandingFontGroupInputInputObject extends InputObject
{
    protected $shopifyFontGroup;
    protected $customFontGroup;

    /**
     * A Shopify font group.
     */
    public function setShopifyFontGroup(ShopifyCheckoutBrandingShopifyFontGroupInputInputObject $shopifyCheckoutBrandingShopifyFontGroupInputInputObject): static
    {
        $this->shopifyFontGroup = $shopifyCheckoutBrandingShopifyFontGroupInputInputObject;

        return $this;
    }

    /**
     * A custom font group.
     */
    public function setCustomFontGroup(ShopifyCheckoutBrandingCustomFontGroupInputInputObject $shopifyCheckoutBrandingCustomFontGroupInputInputObject): static
    {
        $this->customFontGroup = $shopifyCheckoutBrandingCustomFontGroupInputInputObject;

        return $this;
    }
}
