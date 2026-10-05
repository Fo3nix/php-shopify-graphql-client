<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCard";

    public function selectBalance(ShopifyGiftCardBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
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

    public function selectCustomer(ShopifyGiftCardCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
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

    public function selectInitialValue(ShopifyGiftCardInitialValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("initialValue");
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

    public function selectOrder(ShopifyGiftCardOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRecipientAttributes(ShopifyGiftCardRecipientAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardRecipientQueryObject("recipientAttributes");
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

    public function selectTransactions(ShopifyGiftCardTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardTransactionConnectionQueryObject("transactions");
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
