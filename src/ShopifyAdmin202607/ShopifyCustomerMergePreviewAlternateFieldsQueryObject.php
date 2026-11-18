<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fields that can be used to override the default fields.
 */
class ShopifyCustomerMergePreviewAlternateFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewAlternateFields";

    /**
     * The default address of a customer.
     */
    public function selectDefaultAddress(?ShopifyCustomerMergePreviewAlternateFieldsDefaultAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The email state of a customer.
     */
    public function selectEmail(?ShopifyCustomerMergePreviewAlternateFieldsEmailArgumentsObject $argsObject = null): ShopifyCustomerEmailAddressQueryObject
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("email");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The first name of a customer.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * The last name of a customer.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The phone number state of a customer.
     */
    public function selectPhoneNumber(?ShopifyCustomerMergePreviewAlternateFieldsPhoneNumberArgumentsObject $argsObject = null): ShopifyCustomerPhoneNumberQueryObject
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("phoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
