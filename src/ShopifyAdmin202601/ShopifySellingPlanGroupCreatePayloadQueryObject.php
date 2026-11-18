<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupCreate` mutation.
 */
class ShopifySellingPlanGroupCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupCreatePayload";

    /**
     * The created selling plan group object.
     */
    public function selectSellingPlanGroup(?ShopifySellingPlanGroupCreatePayloadSellingPlanGroupArgumentsObject $argsObject = null): ShopifySellingPlanGroupQueryObject
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
    public function selectUserErrors(?ShopifySellingPlanGroupCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
