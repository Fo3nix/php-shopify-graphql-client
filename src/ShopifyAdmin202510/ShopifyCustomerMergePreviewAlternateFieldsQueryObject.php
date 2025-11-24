<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMergePreviewAlternateFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewAlternateFields";

    public function selectDefaultAddress(ShopifyCustomerMergePreviewAlternateFieldsDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail(ShopifyCustomerMergePreviewAlternateFieldsEmailArgumentsObject $argsObject = null)
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

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectPhoneNumber(ShopifyCustomerMergePreviewAlternateFieldsPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("phoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
