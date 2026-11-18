<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping option with rates calculated by a carrier service.
 *
 * Carrier-calculated options fetch real-time rates from carriers(e.g., UPS, FedEx) at checkout
 * instead of using merchant-defined fixed prices.
 */
class ShopifyDeliveryCarrierCalculatedOptionDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierCalculatedOptionDefinition";

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
    public function selectFreeDeliveryMinimumValue(?ShopifyDeliveryCarrierCalculatedOptionDefinitionFreeDeliveryMinimumValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectIncludedCollections(?ShopifyDeliveryCarrierCalculatedOptionDefinitionIncludedCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
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
    public function selectIncludedLocations(?ShopifyDeliveryCarrierCalculatedOptionDefinitionIncludedLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
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
     * The rate groups for this carrier-calculated shipping option.
     */
    public function selectRateGroups(?ShopifyDeliveryCarrierCalculatedOptionDefinitionRateGroupsArgumentsObject $argsObject = null): ShopifyDeliveryCarrierCalculatedRateGroupConnectionQueryObject
    {
        $object = new ShopifyDeliveryCarrierCalculatedRateGroupConnectionQueryObject("rateGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
