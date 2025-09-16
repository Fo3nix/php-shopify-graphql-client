<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingTextFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTextField";

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectTypography(CheckoutBrandingTextFieldTypographyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
