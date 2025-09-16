<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentConstraintRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentConstraintRule";

    public function selectDeliveryMethodTypes()
    {
        $this->selectField("deliveryMethodTypes");

        return $this;
    }

    public function selectFunction(FulfillmentConstraintRuleFunctionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionQueryObject("function");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetafield(FulfillmentConstraintRuleMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(FulfillmentConstraintRuleMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
