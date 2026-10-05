<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingHeadingLevelQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeadingLevel";

    public function selectTypography(ShopifyCheckoutBrandingHeadingLevelTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
