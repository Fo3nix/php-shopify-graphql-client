<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A shipping option shown to buyers at checkout. Implemented by concrete option types.
 */
class ShopifyDeliveryOptionDefinitionInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "DeliveryOptionDefinition";

    /**
     * The currency used for all money values in this shipping option.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * Optional description shown to buyers.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The cart subtotal required for free shipping. Null if no threshold is set.
     */
    public function selectFreeDeliveryMinimumValue(?ShopifyDeliveryOptionDefinitionFreeDeliveryMinimumValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("freeDeliveryMinimumValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID for this shipping option.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Collections that any rate group in this shipping option applies to.
     */
    public function selectIncludedCollections(?ShopifyDeliveryOptionDefinitionIncludedCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("includedCollections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Origin locations that any rate group in this shipping option applies to.
     */
    public function selectIncludedLocations(?ShopifyDeliveryOptionDefinitionIncludedLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("includedLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether this shipping option is active and shown to buyers.
     */
    public function selectIsActive(): static
    {
        $this->selectField("isActive");

        return $this;
    }

    public function onDeliveryCarrierCalculatedOptionDefinition(): ShopifyDeliveryCarrierCalculatedOptionDefinitionQueryObject
    {
        $object = new ShopifyDeliveryCarrierCalculatedOptionDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryFlatRateOptionDefinition(): ShopifyDeliveryFlatRateOptionDefinitionQueryObject
    {
        $object = new ShopifyDeliveryFlatRateOptionDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryValueBasedOptionDefinition(): ShopifyDeliveryValueBasedOptionDefinitionQueryObject
    {
        $object = new ShopifyDeliveryValueBasedOptionDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryWeightBasedOptionDefinition(): ShopifyDeliveryWeightBasedOptionDefinitionQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedOptionDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
