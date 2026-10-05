<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingGlobal";

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectTypography(ShopifyCheckoutBrandingGlobalTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleGlobalQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
