<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The main embed of a comment event.
 */
class ShopifyCommentEventEmbedUnionObject extends UnionObject
{
    public function onShopifyCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDraftOrder(): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyInventoryTransfer(): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
