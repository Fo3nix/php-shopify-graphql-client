<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleSet";

    public function selectAppliedDisjunctively()
    {
        $this->selectField("appliedDisjunctively");

        return $this;
    }

    public function selectRules(CollectionRuleSetRulesArgumentsObject $argsObject = null)
    {
        $object = new CollectionRuleQueryObject("rules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
