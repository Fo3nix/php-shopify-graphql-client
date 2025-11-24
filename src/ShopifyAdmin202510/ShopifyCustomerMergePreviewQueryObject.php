<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMergePreviewQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreview";

    public function selectAlternateFields(ShopifyCustomerMergePreviewAlternateFieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergePreviewAlternateFieldsQueryObject("alternateFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlockingFields(ShopifyCustomerMergePreviewBlockingFieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergePreviewBlockingFieldsQueryObject("blockingFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerMergeErrors(ShopifyCustomerMergePreviewCustomerMergeErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergeErrorQueryObject("customerMergeErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultFields(ShopifyCustomerMergePreviewDefaultFieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergePreviewDefaultFieldsQueryObject("defaultFields");
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
