<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingMerchandiseThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMerchandiseThumbnail";

    public function selectBadge(ShopifyCheckoutBrandingMerchandiseThumbnailBadgeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingMerchandiseThumbnailBadgeQueryObject("badge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectFit()
    {
        $this->selectField("fit");

        return $this;
    }
}
