<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryMethodDefinitionQueryObject extends QueryObject
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

    public function selectMethodConditions(DeliveryMethodDefinitionMethodConditionsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryConditionQueryObject("methodConditions");
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

    public function selectRateProvider(DeliveryMethodDefinitionRateProviderArgumentsObject $argsObject = null)
    {
        $object = new DeliveryRateProviderUnionObject("rateProvider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
