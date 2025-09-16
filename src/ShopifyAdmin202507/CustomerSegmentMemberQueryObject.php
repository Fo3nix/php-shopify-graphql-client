<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerSegmentMemberQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMember";

    public function selectAmountSpent(CustomerSegmentMemberAmountSpentArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amountSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultAddress(CustomerSegmentMemberDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultEmailAddress(CustomerSegmentMemberDefaultEmailAddressArgumentsObject $argsObject = null)
    {
        $object = new CustomerEmailAddressQueryObject("defaultEmailAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultPhoneNumber(CustomerSegmentMemberDefaultPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new CustomerPhoneNumberQueryObject("defaultPhoneNumber");
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

    public function selectMergeable(CustomerSegmentMemberMergeableArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergeableQueryObject("mergeable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(CustomerSegmentMemberMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(CustomerSegmentMemberMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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
