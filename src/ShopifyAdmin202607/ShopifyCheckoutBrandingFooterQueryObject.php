<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingFooterQueryObject extends QueryObject
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

    public function selectContent(ShopifyCheckoutBrandingFooterContentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingFooterContentQueryObject("content");
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
