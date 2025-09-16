<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItemConnection";

    public function selectEdges(ReverseFulfillmentOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ReverseFulfillmentOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReverseFulfillmentOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
