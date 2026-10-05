<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingTextFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTextField";

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectTypography(ShopifyCheckoutBrandingTextFieldTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
