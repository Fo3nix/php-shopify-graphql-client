<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantJoinSellingPlanGroups` mutation.
 */
class ShopifyProductVariantJoinSellingPlanGroupsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantJoinSellingPlanGroupsPayload";

    /**
     * The product variant object.
     */
    public function selectProductVariant(?ShopifyProductVariantJoinSellingPlanGroupsPayloadProductVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
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
    public function selectUserErrors(?ShopifyProductVariantJoinSellingPlanGroupsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
