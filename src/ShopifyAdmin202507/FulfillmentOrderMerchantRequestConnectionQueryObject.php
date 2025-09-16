<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderMerchantRequestConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMerchantRequestConnection";

    public function selectEdges(FulfillmentOrderMerchantRequestConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderMerchantRequestEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(FulfillmentOrderMerchantRequestConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderMerchantRequestQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(FulfillmentOrderMerchantRequestConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
