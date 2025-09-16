<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingButton";

    public function selectBackground()
    {
        $this->selectField("background");

        return $this;
    }

    public function selectBlockPadding()
    {
        $this->selectField("blockPadding");

        return $this;
    }

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectInlinePadding()
    {
        $this->selectField("inlinePadding");

        return $this;
    }

    public function selectTypography(CheckoutBrandingButtonTypographyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
