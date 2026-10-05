<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnableFulfillmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentConnection";

    public function selectEdges(ShopifyReturnableFulfillmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReturnableFulfillmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReturnableFulfillmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
