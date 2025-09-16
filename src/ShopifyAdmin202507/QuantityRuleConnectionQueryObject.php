<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class QuantityRuleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRuleConnection";

    public function selectEdges(QuantityRuleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new QuantityRuleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(QuantityRuleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new QuantityRuleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(QuantityRuleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
