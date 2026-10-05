<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderTransactionQueryObject extends QueryObject
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

    public function selectAmountRoundingSet(ShopifyOrderTransactionAmountRoundingSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountRoundingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmountSet(ShopifyOrderTransactionAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmountV2(ShopifyOrderTransactionAmountV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `paymentId` instead.
     */
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

    public function selectCurrencyExchangeAdjustment(ShopifyOrderTransactionCurrencyExchangeAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencyExchangeAdjustmentQueryObject("currencyExchangeAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDevice(ShopifyOrderTransactionDeviceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("device");
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

    public function selectFees(ShopifyOrderTransactionFeesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTransactionFeeQueryObject("fees");
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

    public function selectLocation(ShopifyOrderTransactionLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
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

    public function selectMaximumRefundableV2(ShopifyOrderTransactionMaximumRefundableV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("maximumRefundableV2");
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

    public function selectOrder(ShopifyOrderTransactionOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentTransaction(ShopifyOrderTransactionParentTransactionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("parentTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentDetails(ShopifyOrderTransactionPaymentDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentDetailsUnionObject("paymentDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentIcon(ShopifyOrderTransactionPaymentIconArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("paymentIcon");
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

    public function selectShopifyPaymentsSet(ShopifyOrderTransactionShopifyPaymentsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsTransactionSetQueryObject("shopifyPaymentsSet");
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

    public function selectTotalUnsettledSet(ShopifyOrderTransactionTotalUnsettledSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalUnsettledSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalUnsettledSet` instead.
     */
    public function selectTotalUnsettledV2(ShopifyOrderTransactionTotalUnsettledV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalUnsettledV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUser(ShopifyOrderTransactionUserArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
