<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rate group for a carrier-calculated shipping option.
 *
 * Sets the carrier service, rate adjustments,
 * and carrier-provided services offered at checkout.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierCalculatedRateGroup";

    /**
     * The flat amount added to or subtracted from carrier rates.
     */
    public function selectAbsoluteAdjustment(?ShopifyDeliveryCarrierCalculatedRateGroupAbsoluteAdjustmentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("absoluteAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether new services from this carrier are automatically included at checkout.
     * When true, buyers see any service that isn't excluded.
     * When false, buyers see only included services.
     */
    public function selectAutoIncludeNewServices(): static
    {
        $this->selectField("autoIncludeNewServices");

        return $this;
    }

    /**
     * The carrier service that provides rates for this rate group.
     */
    public function selectCarrierService(?ShopifyDeliveryCarrierCalculatedRateGroupCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Conditions that limit this rate group to specific collections or origin locations.
     */
    public function selectConditions(?ShopifyDeliveryCarrierCalculatedRateGroupConditionsArgumentsObject $argsObject = null): ShopifyDeliveryRateGroupConditionsQueryObject
    {
        $object = new ShopifyDeliveryRateGroupConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The percentage added to or subtracted from carrier rates.
     * Applied after `absoluteAdjustment`. A value of 10 means +10%.
     */
    public function selectPercentageAdjustment(): static
    {
        $this->selectField("percentageAdjustment");

        return $this;
    }

    /**
     * Carrier-provided services included or excluded for this rate group.
     */
    public function selectServiceConfiguration(?ShopifyDeliveryCarrierCalculatedRateGroupServiceConfigurationArgumentsObject $argsObject = null): ShopifyDeliveryCarrierCalculatedRateGroupServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierCalculatedRateGroupServiceQueryObject("serviceConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
