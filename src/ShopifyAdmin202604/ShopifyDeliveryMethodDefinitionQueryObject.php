<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A method definition contains the delivery rate and the conditions that must be met for the method to be
 * applied.
 */
class ShopifyDeliveryMethodDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinition";

    /**
     * Whether this method definition is active.
     */
    public function selectActive(): static
    {
        $this->selectField("active");

        return $this;
    }

    /**
     * The description of the method definition. Only available on shipping rates that are custom.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The method conditions that must pass for this method definition to be applied to an order.
     */
    public function selectMethodConditions(?ShopifyDeliveryMethodDefinitionMethodConditionsArgumentsObject $argsObject = null): ShopifyDeliveryConditionQueryObject
    {
        $object = new ShopifyDeliveryConditionQueryObject("methodConditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the method definition.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The provided rate for this method definition, from a rate definition or participant.
     */
    public function selectRateProvider(?ShopifyDeliveryMethodDefinitionRateProviderArgumentsObject $argsObject = null): ShopifyDeliveryRateProviderUnionObject
    {
        $object = new ShopifyDeliveryRateProviderUnionObject("rateProvider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
