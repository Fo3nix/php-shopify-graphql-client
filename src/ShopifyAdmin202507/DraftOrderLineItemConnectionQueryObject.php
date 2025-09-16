<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderLineItemConnection";

    public function selectEdges(DraftOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DraftOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DraftOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
