<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2";

    public function selectAdditions(ExchangeV2AdditionsArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2AdditionsQueryObject("additions");
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

    public function selectLocation(ExchangeV2LocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
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

    public function selectRefunds(ExchangeV2RefundsArgumentsObject $argsObject = null)
    {
        $object = new RefundQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturns(ExchangeV2ReturnsArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2ReturnsQueryObject("returns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(ExchangeV2StaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAmountProcessedSet(ExchangeV2TotalAmountProcessedSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalAmountProcessedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalPriceSet(ExchangeV2TotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactions(ExchangeV2TransactionsArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
