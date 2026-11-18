<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A delivery rate group within an option definition.
 */
class ShopifyDeliveryOptionDefinitionRateGroupInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "DeliveryOptionDefinitionRateGroup";

    /**
     * Conditions that scope this rate group to specific collections or origin locations.
     */
    public function selectConditions(?ShopifyDeliveryOptionDefinitionRateGroupConditionsArgumentsObject $argsObject = null): ShopifyDeliveryRateGroupConditionsQueryObject
    {
        $object = new ShopifyDeliveryRateGroupConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onDeliveryCarrierCalculatedRateGroup(): ShopifyDeliveryCarrierCalculatedRateGroupQueryObject
    {
        $object = new ShopifyDeliveryCarrierCalculatedRateGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryFlatRateGroup(): ShopifyDeliveryFlatRateGroupQueryObject
    {
        $object = new ShopifyDeliveryFlatRateGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryValueBasedRateGroup(): ShopifyDeliveryValueBasedRateGroupQueryObject
    {
        $object = new ShopifyDeliveryValueBasedRateGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryWeightBasedRateGroup(): ShopifyDeliveryWeightBasedRateGroupQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedRateGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
