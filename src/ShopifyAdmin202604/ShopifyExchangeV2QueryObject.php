<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2";

    public function selectAdditions(ShopifyExchangeV2AdditionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2AdditionsQueryObject("additions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompletedAt()
    {
        $this->selectField("completedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLocation(ShopifyExchangeV2LocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMirrored()
    {
        $this->selectField("mirrored");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectRefunds(ShopifyExchangeV2RefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturns(ShopifyExchangeV2ReturnsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2ReturnsQueryObject("returns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(ShopifyExchangeV2StaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAmountProcessedSet(ShopifyExchangeV2TotalAmountProcessedSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalAmountProcessedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalPriceSet(ShopifyExchangeV2TotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactions(ShopifyExchangeV2TransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
