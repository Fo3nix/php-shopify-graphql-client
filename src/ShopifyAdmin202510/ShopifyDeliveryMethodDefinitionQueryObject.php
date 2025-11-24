<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryMethodDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinition";

    public function selectActive()
    {
        $this->selectField("active");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMethodConditions(ShopifyDeliveryMethodDefinitionMethodConditionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryConditionQueryObject("methodConditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectRateProvider(ShopifyDeliveryMethodDefinitionRateProviderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryRateProviderUnionObject("rateProvider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
