<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupDelete` mutation.
 */
class ShopifySellingPlanGroupDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupDeletePayload";

    /**
     * The ID of the deleted selling plan group object.
     */
    public function selectDeletedSellingPlanGroupId(): static
    {
        $this->selectField("deletedSellingPlanGroupId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySellingPlanGroupDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
