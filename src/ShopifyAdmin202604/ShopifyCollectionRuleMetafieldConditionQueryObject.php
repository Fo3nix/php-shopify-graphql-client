<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionRuleMetafieldConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleMetafieldCondition";

    public function selectMetafieldDefinition(ShopifyCollectionRuleMetafieldConditionMetafieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("metafieldDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
