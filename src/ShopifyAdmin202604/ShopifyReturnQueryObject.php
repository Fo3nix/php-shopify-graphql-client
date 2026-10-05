<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnQueryObject extends QueryObject
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

    public function selectDecline(ShopifyReturnDeclineArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnDeclineQueryObject("decline");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExchangeLineItems(ShopifyReturnExchangeLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeLineItemConnectionQueryObject("exchangeLineItems");
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

    public function selectOrder(ShopifyReturnOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefunds(ShopifyReturnRefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundConnectionQueryObject("refunds");
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

    public function selectReturnLineItems(ShopifyReturnReturnLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnLineItemTypeConnectionQueryObject("returnLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnShippingFees(ShopifyReturnReturnShippingFeesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnShippingFeeQueryObject("returnShippingFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseFulfillmentOrders(ShopifyReturnReverseFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderConnectionQueryObject("reverseFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(ShopifyReturnStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
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

    public function selectSuggestedFinancialOutcome(ShopifyReturnSuggestedFinancialOutcomeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySuggestedReturnFinancialOutcomeQueryObject("suggestedFinancialOutcome");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `suggestedFinancialOutcome` instead.
     */
    public function selectSuggestedRefund(ShopifyReturnSuggestedRefundArgumentsObject $argsObject = null)
    {
        $object = new ShopifySuggestedReturnRefundQueryObject("suggestedRefund");
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

    public function selectTransactions(ShopifyReturnTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
