<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingDesignSystemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingDesignSystem";

    public function selectColors(ShopifyCheckoutBrandingDesignSystemColorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCornerRadius(ShopifyCheckoutBrandingDesignSystemCornerRadiusArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingCornerRadiusVariablesQueryObject("cornerRadius");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTypography(ShopifyCheckoutBrandingDesignSystemTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingTypographyQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
