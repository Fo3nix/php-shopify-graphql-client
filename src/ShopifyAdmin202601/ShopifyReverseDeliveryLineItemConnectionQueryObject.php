<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItemConnection";

    public function selectEdges(ShopifyReverseDeliveryLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReverseDeliveryLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReverseDeliveryLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
