<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fields that will be kept as part of a customer merge preview.
 */
class ShopifyCustomerMergePreviewDefaultFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewDefaultFields";

    /**
     * The merged addresses resulting from a customer merge.
     */
    public function selectAddresses(?ShopifyCustomerMergePreviewDefaultFieldsAddressesArgumentsObject $argsObject = null): ShopifyMailingAddressConnectionQueryObject
    {
        $object = new ShopifyMailingAddressConnectionQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The default address resulting from a customer merge.
     */
    public function selectDefaultAddress(?ShopifyCustomerMergePreviewDefaultFieldsDefaultAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of customer-specific discounts resulting from a customer merge.
     */
    public function selectDiscountNodeCount(): static
    {
        $this->selectField("discountNodeCount");

        return $this;
    }

    /**
     * The merged customer-specific discounts resulting from a customer merge.
     */
    public function selectDiscountNodes(?ShopifyCustomerMergePreviewDefaultFieldsDiscountNodesArgumentsObject $argsObject = null): ShopifyDiscountNodeConnectionQueryObject
    {
        $object = new ShopifyDiscountNodeConnectionQueryObject("discountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The full name of the customer, based on the values for `first_name` and `last_name`. If `first_name` and `last_name` aren't available, then this field falls back to the customer's email address. If the customer's email isn't available, then this field falls back to the customer's phone number.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * The total number of merged draft orders.
     */
    public function selectDraftOrderCount(): static
    {
        $this->selectField("draftOrderCount");

        return $this;
    }

    /**
     * The merged draft orders resulting from a customer merge.
     */
    public function selectDraftOrders(?ShopifyCustomerMergePreviewDefaultFieldsDraftOrdersArgumentsObject $argsObject = null): ShopifyDraftOrderConnectionQueryObject
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The email state of a customer.
     */
    public function selectEmail(?ShopifyCustomerMergePreviewDefaultFieldsEmailArgumentsObject $argsObject = null): ShopifyCustomerEmailAddressQueryObject
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("email");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The first name resulting from a customer merge.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * The total number of merged gift cards.
     */
    public function selectGiftCardCount(): static
    {
        $this->selectField("giftCardCount");

        return $this;
    }

    /**
     * The merged gift cards resulting from a customer merge.
     */
    public function selectGiftCards(?ShopifyCustomerMergePreviewDefaultFieldsGiftCardsArgumentsObject $argsObject = null): ShopifyGiftCardConnectionQueryObject
    {
        $object = new ShopifyGiftCardConnectionQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The last name resulting from a customer merge.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The total number of merged metafields.
     */
    public function selectMetafieldCount(): static
    {
        $this->selectField("metafieldCount");

        return $this;
    }

    /**
     * The merged note resulting from a customer merge.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The total number of merged orders.
     */
    public function selectOrderCount(): static
    {
        $this->selectField("orderCount");

        return $this;
    }

    /**
     * The merged orders resulting from a customer merge.
     */
    public function selectOrders(?ShopifyCustomerMergePreviewDefaultFieldsOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The phone number state of a customer.
     */
    public function selectPhoneNumber(?ShopifyCustomerMergePreviewDefaultFieldsPhoneNumberArgumentsObject $argsObject = null): ShopifyCustomerPhoneNumberQueryObject
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("phoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The merged tags resulting from a customer merge.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }
}
