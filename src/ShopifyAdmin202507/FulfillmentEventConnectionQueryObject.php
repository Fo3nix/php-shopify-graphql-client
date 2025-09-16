<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentEventConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEventConnection";

    public function selectEdges(FulfillmentEventConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentEventEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(FulfillmentEventConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentEventQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(FulfillmentEventConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
