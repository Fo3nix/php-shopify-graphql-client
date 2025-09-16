<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GiftCardQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCard";

    public function selectBalance(GiftCardBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCustomer(GiftCardCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeactivatedAt()
    {
        $this->selectField("deactivatedAt");

        return $this;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectExpiresOn()
    {
        $this->selectField("expiresOn");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInitialValue(GiftCardInitialValueArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("initialValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastCharacters()
    {
        $this->selectField("lastCharacters");

        return $this;
    }

    public function selectMaskedCode()
    {
        $this->selectField("maskedCode");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrder(GiftCardOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRecipientAttributes(GiftCardRecipientAttributesArgumentsObject $argsObject = null)
    {
        $object = new GiftCardRecipientQueryObject("recipientAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTemplateSuffix()
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    public function selectTransactions(GiftCardTransactionsArgumentsObject $argsObject = null)
    {
        $object = new GiftCardTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
