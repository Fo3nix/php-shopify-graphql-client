<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping option with rates based on package weight.
 *
 * Rates contain tiers that define package-weight thresholds. Checkout selects the
 * appropriate tier using the package weight of the shipping allocation, or the
 * combined package weight when allocations are grouped for weight conditions.
 */
class ShopifyDeliveryWeightBasedOptionDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryWeightBasedOptionDefinition";

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
    public function selectFreeDeliveryMinimumValue(?ShopifyDeliveryWeightBasedOptionDefinitionFreeDeliveryMinimumValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectIncludedCollections(?ShopifyDeliveryWeightBasedOptionDefinitionIncludedCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
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
    public function selectIncludedLocations(?ShopifyDeliveryWeightBasedOptionDefinitionIncludedLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
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
     * The rate groups for this weight-based shipping option.
     */
    public function selectRateGroups(?ShopifyDeliveryWeightBasedOptionDefinitionRateGroupsArgumentsObject $argsObject = null): ShopifyDeliveryWeightBasedRateGroupConnectionQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedRateGroupConnectionQueryObject("rateGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
