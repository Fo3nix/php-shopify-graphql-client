<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleMetafieldConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleMetafieldCondition";

    public function selectMetafieldDefinition(CollectionRuleMetafieldConditionMetafieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionQueryObject("metafieldDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
