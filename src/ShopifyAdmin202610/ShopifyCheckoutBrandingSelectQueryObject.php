<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingSelectQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingSelect";

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectTypography(ShopifyCheckoutBrandingSelectTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
