<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The design system allows you to set values that represent specific attributes
 * of your brand like color and font. These attributes are used throughout the user
 * interface. This brings consistency and allows you to easily make broad design changes.
 */
class ShopifyCheckoutBrandingDesignSystemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingDesignSystem";

    /**
     * The color settings for global colors and color schemes.
     */
    public function selectColors(?ShopifyCheckoutBrandingDesignSystemColorsArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The corner radius variables.
     */
    public function selectCornerRadius(?ShopifyCheckoutBrandingDesignSystemCornerRadiusArgumentsObject $argsObject = null): ShopifyCheckoutBrandingCornerRadiusVariablesQueryObject
    {
        $object = new ShopifyCheckoutBrandingCornerRadiusVariablesQueryObject("cornerRadius");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The typography.
     */
    public function selectTypography(?ShopifyCheckoutBrandingDesignSystemTypographyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTypographyQueryObject
    {
        $object = new ShopifyCheckoutBrandingTypographyQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
