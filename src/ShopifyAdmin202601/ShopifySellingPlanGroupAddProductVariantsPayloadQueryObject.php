<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupAddProductVariants` mutation.
 */
class ShopifySellingPlanGroupAddProductVariantsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupAddProductVariantsPayload";

    /**
     * The updated selling plan group.
     */
    public function selectSellingPlanGroup(?ShopifySellingPlanGroupAddProductVariantsPayloadSellingPlanGroupArgumentsObject $argsObject = null): ShopifySellingPlanGroupQueryObject
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
    public function selectUserErrors(?ShopifySellingPlanGroupAddProductVariantsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
