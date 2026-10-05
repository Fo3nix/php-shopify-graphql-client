<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnableFulfillmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItemConnection";

    public function selectEdges(ShopifyReturnableFulfillmentLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReturnableFulfillmentLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReturnableFulfillmentLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
