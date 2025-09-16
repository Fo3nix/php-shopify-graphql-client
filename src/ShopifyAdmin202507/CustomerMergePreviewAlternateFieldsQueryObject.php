<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMergePreviewAlternateFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewAlternateFields";

    public function selectDefaultAddress(CustomerMergePreviewAlternateFieldsDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail(CustomerMergePreviewAlternateFieldsEmailArgumentsObject $argsObject = null)
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

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectPhoneNumber(CustomerMergePreviewAlternateFieldsPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new CustomerPhoneNumberQueryObject("phoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
