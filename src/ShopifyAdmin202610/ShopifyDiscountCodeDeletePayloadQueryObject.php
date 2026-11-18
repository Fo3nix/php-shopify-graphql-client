<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeDelete` mutation.
 */
class ShopifyDiscountCodeDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeDeletePayload";

    /**
     * The ID of the code discount that was deleted.
     */
    public function selectDeletedCodeDiscountId(): static
    {
        $this->selectField("deletedCodeDiscountId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountCodeDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
