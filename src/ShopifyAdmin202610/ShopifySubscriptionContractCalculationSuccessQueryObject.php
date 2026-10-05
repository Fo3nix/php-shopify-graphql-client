<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationSuccess";

    public function selectCalculatedContract(ShopifySubscriptionContractCalculationSuccessCalculatedContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionCalculatedContractQueryObject("calculatedContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryOptions(ShopifySubscriptionContractCalculationSuccessDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationDeliveryOptionUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProjectedOrderTotals(ShopifySubscriptionContractCalculationSuccessProjectedOrderTotalsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject("projectedOrderTotals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWarnings(ShopifySubscriptionContractCalculationSuccessWarningsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationDiagnosticQueryObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWithMerchandiseCustomizations()
    {
        $this->selectField("withMerchandiseCustomizations");

        return $this;
    }
}
