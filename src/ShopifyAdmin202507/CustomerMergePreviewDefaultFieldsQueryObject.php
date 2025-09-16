<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMergePreviewDefaultFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewDefaultFields";

    public function selectAddresses(CustomerMergePreviewDefaultFieldsAddressesArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressConnectionQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultAddress(CustomerMergePreviewDefaultFieldsDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("defaultAddress");
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

    public function selectDiscountNodes(CustomerMergePreviewDefaultFieldsDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountNodeConnectionQueryObject("discountNodes");
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

    public function selectDraftOrders(CustomerMergePreviewDefaultFieldsDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail(CustomerMergePreviewDefaultFieldsEmailArgumentsObject $argsObject = null)
    {
        $object = new CustomerEmailAddressQueryObject("email");
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

    public function selectGiftCards(CustomerMergePreviewDefaultFieldsGiftCardsArgumentsObject $argsObject = null)
    {
        $object = new GiftCardConnectionQueryObject("giftCards");
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

    public function selectOrders(CustomerMergePreviewDefaultFieldsOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhoneNumber(CustomerMergePreviewDefaultFieldsPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new CustomerPhoneNumberQueryObject("phoneNumber");
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
