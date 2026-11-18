<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `sellingPlanGroupRemoveProductVariants` mutation.
 */
class ShopifySellingPlanGroupRemoveProductVariantsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupRemoveProductVariantsPayload";

    /**
     * The removed product variant ids.
     */
    public function selectRemovedProductVariantIds(): static
    {
        $this->selectField("removedProductVariantIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySellingPlanGroupRemoveProductVariantsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
