<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingSelectQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingSelect";

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectTypography(CheckoutBrandingSelectTypographyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
