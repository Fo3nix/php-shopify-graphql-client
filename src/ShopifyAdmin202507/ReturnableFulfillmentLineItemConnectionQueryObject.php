<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnableFulfillmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItemConnection";

    public function selectEdges(ReturnableFulfillmentLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ReturnableFulfillmentLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReturnableFulfillmentLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
