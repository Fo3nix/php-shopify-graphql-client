<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMergePreviewDefaultFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewDefaultFields";

    public function selectAddresses(ShopifyCustomerMergePreviewDefaultFieldsAddressesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressConnectionQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultAddress(ShopifyCustomerMergePreviewDefaultFieldsDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNodeCount()
    {
        $this->selectField("discountNodeCount");

        return $this;
    }

    public function selectDiscountNodes(ShopifyCustomerMergePreviewDefaultFieldsDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeConnectionQueryObject("discountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectDraftOrderCount()
    {
        $this->selectField("draftOrderCount");

        return $this;
    }

    public function selectDraftOrders(ShopifyCustomerMergePreviewDefaultFieldsDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail(ShopifyCustomerMergePreviewDefaultFieldsEmailArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("email");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectGiftCardCount()
    {
        $this->selectField("giftCardCount");

        return $this;
    }

    public function selectGiftCards(ShopifyCustomerMergePreviewDefaultFieldsGiftCardsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardConnectionQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectMetafieldCount()
    {
        $this->selectField("metafieldCount");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrderCount()
    {
        $this->selectField("orderCount");

        return $this;
    }

    public function selectOrders(ShopifyCustomerMergePreviewDefaultFieldsOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhoneNumber(ShopifyCustomerMergePreviewDefaultFieldsPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("phoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }
}
