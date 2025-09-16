<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderConnection";

    public function selectEdges(ReverseFulfillmentOrderConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ReverseFulfillmentOrderConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReverseFulfillmentOrderConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
