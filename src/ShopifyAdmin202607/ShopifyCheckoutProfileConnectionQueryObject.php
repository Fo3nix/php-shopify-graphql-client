<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutProfileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutProfileConnection";

    public function selectEdges(ShopifyCheckoutProfileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutProfileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCheckoutProfileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutProfileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCheckoutProfileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
