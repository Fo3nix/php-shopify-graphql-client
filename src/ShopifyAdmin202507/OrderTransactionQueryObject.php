<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransaction";

    public function selectAccountNumber()
    {
        $this->selectField("accountNumber");

        return $this;
    }

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }

    public function selectAmountRoundingSet(OrderTransactionAmountRoundingSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountRoundingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmountSet(OrderTransactionAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmountV2(OrderTransactionAmountV2ArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAuthorizationCode()
    {
        $this->selectField("authorizationCode");

        return $this;
    }

    public function selectAuthorizationExpiresAt()
    {
        $this->selectField("authorizationExpiresAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrencyExchangeAdjustment(OrderTransactionCurrencyExchangeAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new CurrencyExchangeAdjustmentQueryObject("currencyExchangeAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDevice(OrderTransactionDeviceArgumentsObject $argsObject = null)
    {
        $object = new PointOfSaleDeviceQueryObject("device");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectErrorCode()
    {
        $this->selectField("errorCode");

        return $this;
    }

    public function selectFees(OrderTransactionFeesArgumentsObject $argsObject = null)
    {
        $object = new TransactionFeeQueryObject("fees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFormattedGateway()
    {
        $this->selectField("formattedGateway");

        return $this;
    }

    public function selectGateway()
    {
        $this->selectField("gateway");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectKind()
    {
        $this->selectField("kind");

        return $this;
    }

    public function selectLocation(OrderTransactionLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectManualPaymentGateway()
    {
        $this->selectField("manualPaymentGateway");

        return $this;
    }

    public function selectManuallyCapturable()
    {
        $this->selectField("manuallyCapturable");

        return $this;
    }

    /**
     * @deprecated Use `maximumRefundableV2` instead.
     */
    public function selectMaximumRefundable()
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    public function selectMaximumRefundableV2(OrderTransactionMaximumRefundableV2ArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("maximumRefundableV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMultiCapturable()
    {
        $this->selectField("multiCapturable");

        return $this;
    }

    public function selectOrder(OrderTransactionOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentTransaction(OrderTransactionParentTransactionArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("parentTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentDetails(OrderTransactionPaymentDetailsArgumentsObject $argsObject = null)
    {
        $object = new PaymentDetailsUnionObject("paymentDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentIcon(OrderTransactionPaymentIconArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("paymentIcon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentId()
    {
        $this->selectField("paymentId");

        return $this;
    }

    /**
     * @deprecated Use `paymentIcon` instead.
     */
    public function selectPaymentMethod()
    {
        $this->selectField("paymentMethod");

        return $this;
    }

    public function selectProcessedAt()
    {
        $this->selectField("processedAt");

        return $this;
    }

    public function selectReceiptJson()
    {
        $this->selectField("receiptJson");

        return $this;
    }

    public function selectSettlementCurrency()
    {
        $this->selectField("settlementCurrency");

        return $this;
    }

    public function selectSettlementCurrencyRate()
    {
        $this->selectField("settlementCurrencyRate");

        return $this;
    }

    public function selectShopifyPaymentsSet(OrderTransactionShopifyPaymentsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsTransactionSetQueryObject("shopifyPaymentsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTest()
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * @deprecated Use `totalUnsettledSet` instead.
     */
    public function selectTotalUnsettled()
    {
        $this->selectField("totalUnsettled");

        return $this;
    }

    public function selectTotalUnsettledSet(OrderTransactionTotalUnsettledSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalUnsettledSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalUnsettledSet` instead.
     */
    public function selectTotalUnsettledV2(OrderTransactionTotalUnsettledV2ArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalUnsettledV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUser(OrderTransactionUserArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
