<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A preview of the results of a customer merge request. Use `resultingCustomerId` to check which customer
 * would be kept before running `customerMerge`.
 */
class ShopifyCustomerMergePreviewQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreview";

    /**
     * The fields that can be used to override the default fields.
     */
    public function selectAlternateFields(?ShopifyCustomerMergePreviewAlternateFieldsArgumentsObject $argsObject = null): ShopifyCustomerMergePreviewAlternateFieldsQueryObject
    {
        $object = new ShopifyCustomerMergePreviewAlternateFieldsQueryObject("alternateFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fields that will block the merge if the two customers are merged.
     */
    public function selectBlockingFields(?ShopifyCustomerMergePreviewBlockingFieldsArgumentsObject $argsObject = null): ShopifyCustomerMergePreviewBlockingFieldsQueryObject
    {
        $object = new ShopifyCustomerMergePreviewBlockingFieldsQueryObject("blockingFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The errors blocking the customer merge.
     */
    public function selectCustomerMergeErrors(?ShopifyCustomerMergePreviewCustomerMergeErrorsArgumentsObject $argsObject = null): ShopifyCustomerMergeErrorQueryObject
    {
        $object = new ShopifyCustomerMergeErrorQueryObject("customerMergeErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fields that will be kept if the two customers are merged.
     */
    public function selectDefaultFields(?ShopifyCustomerMergePreviewDefaultFieldsArgumentsObject $argsObject = null): ShopifyCustomerMergePreviewDefaultFieldsQueryObject
    {
        $object = new ShopifyCustomerMergePreviewDefaultFieldsQueryObject("defaultFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the customer that would be kept if the two customers were merged.
     */
    public function selectResultingCustomerId(): static
    {
        $this->selectField("resultingCustomerId");

        return $this;
    }
}
