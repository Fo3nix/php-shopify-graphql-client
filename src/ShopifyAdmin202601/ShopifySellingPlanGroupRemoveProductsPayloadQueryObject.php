<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupRemoveProducts` mutation.
 */
class ShopifySellingPlanGroupRemoveProductsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupRemoveProductsPayload";

    /**
     * The removed product ids.
     */
    public function selectRemovedProductIds(): static
    {
        $this->selectField("removedProductIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySellingPlanGroupRemoveProductsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
