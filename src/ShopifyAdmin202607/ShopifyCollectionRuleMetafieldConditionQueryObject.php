<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Identifies a metafield definition used as a rule for the collection.
 */
class ShopifyCollectionRuleMetafieldConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleMetafieldCondition";

    /**
     * The metafield definition associated with the condition.
     */
    public function selectMetafieldDefinition(?ShopifyCollectionRuleMetafieldConditionMetafieldDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("metafieldDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
