<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription contract calculation that has completed successfully.
 */
class ShopifySubscriptionContractCalculationSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationSuccess";

    /**
     * The calculated subscription contract. This contract is uncommitted and can be previewed before committing.
     */
    public function selectCalculatedContract(?ShopifySubscriptionContractCalculationSuccessCalculatedContractArgumentsObject $argsObject = null): ShopifySubscriptionCalculatedContractQueryObject
    {
        $object = new ShopifySubscriptionCalculatedContractQueryObject("calculatedContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The available delivery options computed during the calculation.
     */
    public function selectDeliveryOptions(?ShopifySubscriptionContractCalculationSuccessDeliveryOptionsArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationDeliveryOptionUnionObject
    {
        $object = new ShopifySubscriptionContractCalculationDeliveryOptionUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the contract calculation.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Projected order totals (subtotal, delivery, estimated tax, discounts, and grand total) for the calculated contract. Null when the calculation only discovered delivery options for an address rather than calculating committed totals.
     */
    public function selectProjectedOrderTotals(?ShopifySubscriptionContractCalculationSuccessProjectedOrderTotalsArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject("projectedOrderTotals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Non-fatal warnings produced during the calculation. The calculation still succeeded; warnings inform the merchant about issues that should be reviewed before committing the contract.
     */
    public function selectWarnings(?ShopifySubscriptionContractCalculationSuccessWarningsArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationDiagnosticQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationDiagnosticQueryObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether merchandise customizations were enabled for the calculation.
     */
    public function selectWithMerchandiseCustomizations(): static
    {
        $this->selectField("withMerchandiseCustomizations");

        return $this;
    }
}
