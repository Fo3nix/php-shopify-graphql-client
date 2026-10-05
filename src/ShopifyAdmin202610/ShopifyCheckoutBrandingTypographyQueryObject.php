<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingTypographyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypography";

    public function selectPrimary(ShopifyCheckoutBrandingTypographyPrimaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingFontGroupQueryObject("primary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondary(ShopifyCheckoutBrandingTypographySecondaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingFontGroupQueryObject("secondary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSize(ShopifyCheckoutBrandingTypographySizeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingFontSizeQueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
