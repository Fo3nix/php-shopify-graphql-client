<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMergePreviewQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreview";

    public function selectAlternateFields(CustomerMergePreviewAlternateFieldsArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergePreviewAlternateFieldsQueryObject("alternateFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlockingFields(CustomerMergePreviewBlockingFieldsArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergePreviewBlockingFieldsQueryObject("blockingFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerMergeErrors(CustomerMergePreviewCustomerMergeErrorsArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergeErrorQueryObject("customerMergeErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultFields(CustomerMergePreviewDefaultFieldsArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergePreviewDefaultFieldsQueryObject("defaultFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResultingCustomerId()
    {
        $this->selectField("resultingCustomerId");

        return $this;
    }
}
