<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentLineItemConnection";

    public function selectEdges(ShopifyFulfillmentLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFulfillmentLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFulfillmentLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
