<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The merchandise thumbnails customizations.
 */
class ShopifyCheckoutBrandingMerchandiseThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMerchandiseThumbnail";

    /**
     * The settings for the merchandise thumbnail badge.
     */
    public function selectBadge(?ShopifyCheckoutBrandingMerchandiseThumbnailBadgeArgumentsObject $argsObject = null): ShopifyCheckoutBrandingMerchandiseThumbnailBadgeQueryObject
    {
        $object = new ShopifyCheckoutBrandingMerchandiseThumbnailBadgeQueryObject("badge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The border used for merchandise thumbnails.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The corner radius used for merchandise thumbnails.
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
