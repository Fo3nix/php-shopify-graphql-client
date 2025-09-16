<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentLineItemConnection";

    public function selectEdges(FulfillmentLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(FulfillmentLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(FulfillmentLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
