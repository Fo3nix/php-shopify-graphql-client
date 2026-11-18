<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupAddProducts` mutation.
 */
class ShopifySellingPlanGroupAddProductsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupAddProductsPayload";

    /**
     * The updated selling plan group.
     */
    public function selectSellingPlanGroup(?ShopifySellingPlanGroupAddProductsPayloadSellingPlanGroupArgumentsObject $argsObject = null): ShopifySellingPlanGroupQueryObject
    {
        $object = new ShopifySellingPlanGroupQueryObject("sellingPlanGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySellingPlanGroupAddProductsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
