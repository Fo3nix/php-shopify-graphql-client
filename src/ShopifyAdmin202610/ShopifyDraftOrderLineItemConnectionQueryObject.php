<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderLineItemConnection";

    public function selectEdges(ShopifyDraftOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDraftOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDraftOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
