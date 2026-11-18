<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Creates a unified visual identity for your checkout that keeps customers engaged and reinforces your brand throughout the purchase process. This comprehensive branding system lets you control every visual aspect of checkout, from colors and fonts to layouts and imagery, so your checkout feels like a natural extension of your store.
 *
 * For example, a luxury fashion retailer can configure their checkout with custom color palettes, premium typography, rounded corners for a softer feel, and branded imagery that matches their main website aesthetic.
 *
 * Use the `Branding` object to:
 * - Configure comprehensive checkout visual identity
 * - Coordinate color schemes across all checkout elements
 * - Apply consistent typography and spacing standards
 * - Manage background imagery and layout customizations
 * - Control visibility of various checkout components
 *
 * The branding configuration includes design system foundations like color roles, typography scales, and spacing units, plus specific customizations for sections, dividers, and interactive elements. This allows merchants to create cohesive checkout experiences that reinforce their brand identity while maintaining usability standards.
 *
 * Different color schemes can be defined for various contexts, ensuring optimal contrast and accessibility across different checkout states and customer preferences.
 */
class ShopifyCheckoutBrandingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBranding";

    /**
     * The customizations that apply to specific components or areas of the user interface.
     */
    public function selectCustomizations(?ShopifyCheckoutBrandingCustomizationsArgumentsObject $argsObject = null): ShopifyCheckoutBrandingCustomizationsQueryObject
    {
        $object = new ShopifyCheckoutBrandingCustomizationsQueryObject("customizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The design system allows you to set values that represent specific attributes
     * of your brand like color and font. These attributes are used throughout the user
     * interface. This brings consistency and allows you to easily make broad design changes.
     */
    public function selectDesignSystem(?ShopifyCheckoutBrandingDesignSystemArgumentsObject $argsObject = null): ShopifyCheckoutBrandingDesignSystemQueryObject
    {
        $object = new ShopifyCheckoutBrandingDesignSystemQueryObject("designSystem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
