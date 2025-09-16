<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingTypographyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypography";

    public function selectPrimary(CheckoutBrandingTypographyPrimaryArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingFontGroupQueryObject("primary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondary(CheckoutBrandingTypographySecondaryArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingFontGroupQueryObject("secondary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSize(CheckoutBrandingTypographySizeArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingFontSizeQueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
