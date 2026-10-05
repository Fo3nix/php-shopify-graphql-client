<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemConnection";

    public function selectEdges(ShopifyAbandonedCheckoutLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAbandonedCheckoutLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAbandonedCheckoutLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
