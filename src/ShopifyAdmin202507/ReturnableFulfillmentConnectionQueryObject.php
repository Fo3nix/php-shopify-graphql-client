<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnableFulfillmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentConnection";

    public function selectEdges(ReturnableFulfillmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ReturnableFulfillmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReturnableFulfillmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
