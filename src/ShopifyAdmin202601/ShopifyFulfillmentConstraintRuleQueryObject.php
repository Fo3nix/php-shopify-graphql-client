<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentConstraintRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentConstraintRule";

    public function selectDeliveryMethodTypes()
    {
        $this->selectField("deliveryMethodTypes");

        return $this;
    }

    public function selectFunction(ShopifyFulfillmentConstraintRuleFunctionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionQueryObject("function");
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

    public function selectMetafield(ShopifyFulfillmentConstraintRuleMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyFulfillmentConstraintRuleMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
