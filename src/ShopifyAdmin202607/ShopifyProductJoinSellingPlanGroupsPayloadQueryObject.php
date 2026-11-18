<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productJoinSellingPlanGroups` mutation.
 */
class ShopifyProductJoinSellingPlanGroupsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductJoinSellingPlanGroupsPayload";

    /**
     * The product object.
     */
    public function selectProduct(?ShopifyProductJoinSellingPlanGroupsPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductJoinSellingPlanGroupsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
