<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupUpdate` mutation.
 */
class ShopifySellingPlanGroupUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupUpdatePayload";

    /**
     * The IDs of the deleted Subscription Plans.
     */
    public function selectDeletedSellingPlanIds(): static
    {
        $this->selectField("deletedSellingPlanIds");

        return $this;
    }

    /**
     * The updated Selling Plan Group.
     */
    public function selectSellingPlanGroup(?ShopifySellingPlanGroupUpdatePayloadSellingPlanGroupArgumentsObject $argsObject = null): ShopifySellingPlanGroupQueryObject
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
    public function selectUserErrors(?ShopifySellingPlanGroupUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
