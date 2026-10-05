<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerSegmentMemberQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMember";

    public function selectAmountSpent(ShopifyCustomerSegmentMemberAmountSpentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amountSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultAddress(ShopifyCustomerSegmentMemberDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultEmailAddress(ShopifyCustomerSegmentMemberDefaultEmailAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("defaultEmailAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultPhoneNumber(ShopifyCustomerSegmentMemberDefaultPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("defaultPhoneNumber");
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

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectLastOrderId()
    {
        $this->selectField("lastOrderId");

        return $this;
    }

    public function selectMergeable(ShopifyCustomerSegmentMemberMergeableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergeableQueryObject("mergeable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyCustomerSegmentMemberMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyCustomerSegmentMemberMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectNumberOfOrders()
    {
        $this->selectField("numberOfOrders");

        return $this;
    }
}
