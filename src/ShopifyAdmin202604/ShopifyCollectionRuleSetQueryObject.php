<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionRuleSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleSet";

    public function selectAppliedDisjunctively()
    {
        $this->selectField("appliedDisjunctively");

        return $this;
    }

    public function selectRules(ShopifyCollectionRuleSetRulesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionRuleQueryObject("rules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
