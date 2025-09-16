<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItemConnection";

    public function selectEdges(ReverseDeliveryLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ReverseDeliveryLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReverseDeliveryLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
