<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleConditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleConditions";

    public function selectAllowedRelations()
    {
        $this->selectField("allowedRelations");

        return $this;
    }

    public function selectDefaultRelation()
    {
        $this->selectField("defaultRelation");

        return $this;
    }

    public function selectRuleObject(CollectionRuleConditionsRuleObjectArgumentsObject $argsObject = null)
    {
        $object = new CollectionRuleConditionsRuleObjectUnionObject("ruleObject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRuleType()
    {
        $this->selectField("ruleType");

        return $this;
    }
}
