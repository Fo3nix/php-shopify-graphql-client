<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyQuantityRuleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRuleConnection";

    public function selectEdges(ShopifyQuantityRuleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityRuleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyQuantityRuleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityRuleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyQuantityRuleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
