<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCashManagementReasonCodeUnionObject extends UnionObject
{
    public function onShopifyCashManagementCustomReasonCode()
    {
        $object = new ShopifyCashManagementCustomReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCashManagementDefaultReasonCode()
    {
        $object = new ShopifyCashManagementDefaultReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCashManagementSystemReasonCode()
    {
        $object = new ShopifyCashManagementSystemReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
