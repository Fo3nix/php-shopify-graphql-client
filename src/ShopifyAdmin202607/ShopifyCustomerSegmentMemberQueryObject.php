<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The member of a segment.
 */
class ShopifyCustomerSegmentMemberQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMember";

    /**
     * The total amount of money that the member has spent on orders.
     */
    public function selectAmountSpent(?ShopifyCustomerSegmentMemberAmountSpentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amountSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The member's default address.
     */
    public function selectDefaultAddress(?ShopifyCustomerSegmentMemberDefaultAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The member's default email address.
     */
    public function selectDefaultEmailAddress(?ShopifyCustomerSegmentMemberDefaultEmailAddressArgumentsObject $argsObject = null): ShopifyCustomerEmailAddressQueryObject
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("defaultEmailAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The member's default phone number.
     */
    public function selectDefaultPhoneNumber(?ShopifyCustomerSegmentMemberDefaultPhoneNumberArgumentsObject $argsObject = null): ShopifyCustomerPhoneNumberQueryObject
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("defaultPhoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The full name of the member, which is based on the values of the `first_name` and `last_name` fields. If the member's first name and last name aren't available, then the customer's email address is used. If the customer's email address isn't available, then the customer's phone number is used.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * The member's first name.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * The member’s ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The member's last name.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The ID of the member's most recent order.
     */
    public function selectLastOrderId(): static
    {
        $this->selectField("lastOrderId");

        return $this;
    }

    /**
     * Whether the customer can be merged with another customer.
     */
    public function selectMergeable(?ShopifyCustomerSegmentMemberMergeableArgumentsObject $argsObject = null): ShopifyCustomerMergeableQueryObject
    {
        $object = new ShopifyCustomerMergeableQueryObject("mergeable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyCustomerSegmentMemberMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyCustomerSegmentMemberMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A note about the member.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The total number of orders that the member has made.
     */
    public function selectNumberOfOrders(): static
    {
        $this->selectField("numberOfOrders");

        return $this;
    }
}
