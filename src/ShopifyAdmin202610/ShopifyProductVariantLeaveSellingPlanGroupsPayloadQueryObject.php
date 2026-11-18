<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantLeaveSellingPlanGroups` mutation.
 */
class ShopifyProductVariantLeaveSellingPlanGroupsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantLeaveSellingPlanGroupsPayload";

    /**
     * The product variant object.
     */
    public function selectProductVariant(?ShopifyProductVariantLeaveSellingPlanGroupsPayloadProductVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductVariantLeaveSellingPlanGroupsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
