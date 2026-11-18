<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping option with fixed-price rates.
 *
 * Flat rate options charge the same price regardless of cart value or weight.
 */
class ShopifyDeliveryFlatRateOptionDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryFlatRateOptionDefinition";

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
    public function selectFreeDeliveryMinimumValue(?ShopifyDeliveryFlatRateOptionDefinitionFreeDeliveryMinimumValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectIncludedCollections(?ShopifyDeliveryFlatRateOptionDefinitionIncludedCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
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
    public function selectIncludedLocations(?ShopifyDeliveryFlatRateOptionDefinitionIncludedLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
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

    /**
     * The name shown to buyers for this shipping option.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The flat rate groups for this shipping option.
     */
    public function selectRateGroups(?ShopifyDeliveryFlatRateOptionDefinitionRateGroupsArgumentsObject $argsObject = null): ShopifyDeliveryFlatRateGroupConnectionQueryObject
    {
        $object = new ShopifyDeliveryFlatRateGroupConnectionQueryObject("rateGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
