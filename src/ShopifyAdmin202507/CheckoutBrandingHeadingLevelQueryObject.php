<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingHeadingLevelQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeadingLevel";

    public function selectTypography(CheckoutBrandingHeadingLevelTypographyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
