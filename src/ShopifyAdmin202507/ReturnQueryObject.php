<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnQueryObject extends QueryObject
{
    const OBJECT_NAME = "Return";

    public function selectClosedAt()
    {
        $this->selectField("closedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDecline(ReturnDeclineArgumentsObject $argsObject = null)
    {
        $object = new ReturnDeclineQueryObject("decline");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExchangeLineItems(ReturnExchangeLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ExchangeLineItemConnectionQueryObject("exchangeLineItems");
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

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOrder(ReturnOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefunds(ReturnRefundsArgumentsObject $argsObject = null)
    {
        $object = new RefundConnectionQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRequestApprovedAt()
    {
        $this->selectField("requestApprovedAt");

        return $this;
    }

    public function selectReturnLineItems(ReturnReturnLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ReturnLineItemTypeConnectionQueryObject("returnLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnShippingFees(ReturnReturnShippingFeesArgumentsObject $argsObject = null)
    {
        $object = new ReturnShippingFeeQueryObject("returnShippingFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseFulfillmentOrders(ReturnReverseFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderConnectionQueryObject("reverseFulfillmentOrders");
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

    public function selectSuggestedFinancialOutcome(ReturnSuggestedFinancialOutcomeArgumentsObject $argsObject = null)
    {
        $object = new SuggestedReturnFinancialOutcomeQueryObject("suggestedFinancialOutcome");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `suggestedFinancialOutcome` instead.
     */
    public function selectSuggestedRefund(ReturnSuggestedRefundArgumentsObject $argsObject = null)
    {
        $object = new SuggestedReturnRefundQueryObject("suggestedRefund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
