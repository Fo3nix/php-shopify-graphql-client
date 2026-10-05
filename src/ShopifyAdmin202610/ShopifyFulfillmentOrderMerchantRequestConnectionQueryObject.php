<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderMerchantRequestConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMerchantRequestConnection";

    public function selectEdges(ShopifyFulfillmentOrderMerchantRequestConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderMerchantRequestEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFulfillmentOrderMerchantRequestConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderMerchantRequestQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFulfillmentOrderMerchantRequestConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
