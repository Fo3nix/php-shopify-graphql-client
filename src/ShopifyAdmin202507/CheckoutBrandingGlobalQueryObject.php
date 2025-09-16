<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingGlobal";

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectTypography(CheckoutBrandingGlobalTypographyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTypographyStyleGlobalQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
