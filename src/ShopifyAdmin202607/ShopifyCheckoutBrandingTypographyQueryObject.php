<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The typography settings used for checkout-related text. Use these settings to customize the
 * font family and size for primary and secondary text elements.
 *
 * Refer to the [typography tutorial](https://shopify.dev/docs/apps/checkout/styling/customize-typography)
 * for further information on typography customization.
 */
class ShopifyCheckoutBrandingTypographyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypography";

    /**
     * A font group used for most components such as text, buttons and form controls.
     */
    public function selectPrimary(?ShopifyCheckoutBrandingTypographyPrimaryArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFontGroupQueryObject
    {
        $object = new ShopifyCheckoutBrandingFontGroupQueryObject("primary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A font group used for heading components by default.
     */
    public function selectSecondary(?ShopifyCheckoutBrandingTypographySecondaryArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFontGroupQueryObject
    {
        $object = new ShopifyCheckoutBrandingFontGroupQueryObject("secondary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The font size design system (base size in pixels and scaling between different sizes).
     */
    public function selectSize(?ShopifyCheckoutBrandingTypographySizeArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFontSizeQueryObject
    {
        $object = new ShopifyCheckoutBrandingFontSizeQueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
