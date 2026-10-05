<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail";

    public function selectBadge(ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeQueryObject("badge");
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
