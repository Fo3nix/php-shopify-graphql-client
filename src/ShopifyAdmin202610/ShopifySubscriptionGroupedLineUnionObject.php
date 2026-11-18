<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * A subscription contract line grouped by bundle parent: either a standalone line or a bundle parent line and its components.
 */
class ShopifySubscriptionGroupedLineUnionObject extends UnionObject
{
    public function onShopifySubscriptionLine(): ShopifySubscriptionLineQueryObject
    {
        $object = new ShopifySubscriptionLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionParentLine(): ShopifySubscriptionParentLineQueryObject
    {
        $object = new ShopifySubscriptionParentLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
