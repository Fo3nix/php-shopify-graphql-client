<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingDesignSystemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingDesignSystem";

    public function selectColors(CheckoutBrandingDesignSystemColorsArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCornerRadius(CheckoutBrandingDesignSystemCornerRadiusArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingCornerRadiusVariablesQueryObject("cornerRadius");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTypography(CheckoutBrandingDesignSystemTypographyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTypographyQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
