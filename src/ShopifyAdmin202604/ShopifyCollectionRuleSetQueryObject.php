<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The set of rules that are used to determine which products are included in the collection.
 */
class ShopifyCollectionRuleSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleSet";

    /**
     * Whether products must match any or all of the rules to be included in the collection.
     * If true, then products must match at least one of the rules to be included in the collection.
     * If false, then products must match all of the rules to be included in the collection.
     */
    public function selectAppliedDisjunctively(): static
    {
        $this->selectField("appliedDisjunctively");

        return $this;
    }

    /**
     * The rules used to assign products to the collection.
     */
    public function selectRules(?ShopifyCollectionRuleSetRulesArgumentsObject $argsObject = null): ShopifyCollectionRuleQueryObject
    {
        $object = new ShopifyCollectionRuleQueryObject("rules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
