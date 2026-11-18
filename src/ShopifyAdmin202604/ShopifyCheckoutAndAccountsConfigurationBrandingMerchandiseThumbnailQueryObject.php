<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The merchandise thumbnails customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail";

    /**
     * The merchandise thumbnail badge.
     */
    public function selectBadge(?ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeQueryObject("badge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The border.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The corner radius.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The property used to customize how the product image fits within merchandise thumbnails.
     */
    public function selectFit(): static
    {
        $this->selectField("fit");

        return $this;
    }
}
