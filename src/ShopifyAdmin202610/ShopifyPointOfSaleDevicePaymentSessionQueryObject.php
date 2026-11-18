<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks the payment activity for a point of sale device.
 */
class ShopifyPointOfSaleDevicePaymentSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSession";

    /**
     * The activities on the point of sale device payment session.
     */
    public function selectCashActivities(?ShopifyPointOfSaleDevicePaymentSessionCashActivitiesArgumentsObject $argsObject = null): ShopifyCashActivityConnectionQueryObject
    {
        $object = new ShopifyCashActivityConnectionQueryObject("cashActivities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cash that was physically counted when the point of sale device payment session was closed.
     */
    public function selectCashCountedAtClose(?ShopifyPointOfSaleDevicePaymentSessionCashCountedAtCloseArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashCountedAtClose");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cash that was physically counted when the point of sale device payment session was opened.
     */
    public function selectCashCountedAtOpen(?ShopifyPointOfSaleDevicePaymentSessionCashCountedAtOpenArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashCountedAtOpen");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cash drawer associated with the point of sale device payment session. The session's sales and cash tracking activity will affect the cash drawer's balance.
     */
    public function selectCashDrawer(?ShopifyPointOfSaleDevicePaymentSessionCashDrawerArgumentsObject $argsObject = null): ShopifyCashDrawerQueryObject
    {
        $object = new ShopifyCashDrawerQueryObject("cashDrawer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount that the cash drawer balance was adjusted when the session was closed.
     */
    public function selectClosingAdjustment(?ShopifyPointOfSaleDevicePaymentSessionClosingAdjustmentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("closingAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The counted balance of the cash drawer when the point of sale device payment session was closed.
     */
    public function selectClosingBalance(?ShopifyPointOfSaleDevicePaymentSessionClosingBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("closingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The note associated with the point of sale device payment session closing.
     */
    public function selectClosingNote(): static
    {
        $this->selectField("closingNote");

        return $this;
    }

    /**
     * The staff member who closed the point of sale device payment session.
     */
    public function selectClosingStaffMember(?ShopifyPointOfSaleDevicePaymentSessionClosingStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("closingStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time the point of sale device payment session was closed.
     */
    public function selectClosingTime(): static
    {
        $this->selectField("closingTime");

        return $this;
    }

    /**
     * The currency of the point of sale device payment session.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * The expected cash when the point of sale device payment session was closed.
     */
    public function selectExpectedCashAtClose(?ShopifyPointOfSaleDevicePaymentSessionExpectedCashAtCloseArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("expectedCashAtClose");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The expected balance of the cash drawer when the point of sale device payment session was opened.
     */
    public function selectExpectedCashAtOpen(?ShopifyPointOfSaleDevicePaymentSessionExpectedCashAtOpenArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("expectedCashAtOpen");
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

    /**
     * The location associated with the point of sale device payment session. The session's sales and cash tracking activity will contribute to the location's totals.
     */
    public function selectLocation(?ShopifyPointOfSaleDevicePaymentSessionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The net cash sales for the point of sale device payment session.
     */
    public function selectNetCashSales(?ShopifyPointOfSaleDevicePaymentSessionNetCashSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("netCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The net sales for the duration of this session.
     */
    public function selectNetSales(?ShopifyPointOfSaleDevicePaymentSessionNetSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("netSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The note associated with the point of sale device payment session opening.
     */
    public function selectOpeningNote(): static
    {
        $this->selectField("openingNote");

        return $this;
    }

    /**
     * The staff member who opened the point of sale device payment session.
     */
    public function selectOpeningStaffMember(?ShopifyPointOfSaleDevicePaymentSessionOpeningStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("openingStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time the point of sale device payment session was opened.
     */
    public function selectOpeningTime(): static
    {
        $this->selectField("openingTime");

        return $this;
    }

    /**
     * The point of sale device.
     */
    public function selectPointOfSaleDevice(?ShopifyPointOfSaleDevicePaymentSessionPointOfSaleDeviceArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("pointOfSaleDevice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the point of sale device payment session is open. Payments can't be processed or refunded during a closed session, and the cash drawer balance can't be adjusted or corrected.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The total adjustments for the point of sale device payment session.
     */
    public function selectTotalAdjustments(?ShopifyPointOfSaleDevicePaymentSessionTotalAdjustmentsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total cash refunds for the point of sale device payment session.
     */
    public function selectTotalCashRefunds(?ShopifyPointOfSaleDevicePaymentSessionTotalCashRefundsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total cash sales for the point of sale device payment session.
     */
    public function selectTotalCashSales(?ShopifyPointOfSaleDevicePaymentSessionTotalCashSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discrepancy for the point of sale device payment session.
     */
    public function selectTotalDiscrepancy(?ShopifyPointOfSaleDevicePaymentSessionTotalDiscrepancyArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all refunds for the duration of this session.
     */
    public function selectTotalRefunds(?ShopifyPointOfSaleDevicePaymentSessionTotalRefundsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all sales for the duration of this session.
     */
    public function selectTotalSales(?ShopifyPointOfSaleDevicePaymentSessionTotalSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the point of sale device payment session totals are ready.
     */
    public function selectTotalsReady(): static
    {
        $this->selectField("totalsReady");

        return $this;
    }
}
