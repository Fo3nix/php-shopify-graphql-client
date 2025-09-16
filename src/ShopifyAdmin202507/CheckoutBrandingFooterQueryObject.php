<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFooter";

    public function selectAlignment()
    {
        $this->selectField("alignment");

        return $this;
    }

    public function selectColorScheme()
    {
        $this->selectField("colorScheme");

        return $this;
    }

    public function selectContent(CheckoutBrandingFooterContentArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingFooterContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDivided()
    {
        $this->selectField("divided");

        return $this;
    }

    public function selectPadding()
    {
        $this->selectField("padding");

        return $this;
    }

    public function selectPosition()
    {
        $this->selectField("position");

        return $this;
    }
}
