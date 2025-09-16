<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemConnection";

    public function selectEdges(FulfillmentOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(FulfillmentOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(FulfillmentOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
