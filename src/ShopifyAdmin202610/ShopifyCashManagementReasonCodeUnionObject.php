<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * Reason code for cash management.
 */
class ShopifyCashManagementReasonCodeUnionObject extends UnionObject
{
    public function onShopifyCashManagementCustomReasonCode(): ShopifyCashManagementCustomReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementCustomReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCashManagementDefaultReasonCode(): ShopifyCashManagementDefaultReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementDefaultReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCashManagementSystemReasonCode(): ShopifyCashManagementSystemReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementSystemReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
