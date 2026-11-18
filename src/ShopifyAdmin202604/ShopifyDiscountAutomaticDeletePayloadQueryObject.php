<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticDelete` mutation.
 */
class ShopifyDiscountAutomaticDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticDeletePayload";

    /**
     * The ID of the automatic discount that was deleted.
     */
    public function selectDeletedAutomaticDiscountId(): static
    {
        $this->selectField("deletedAutomaticDiscountId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountAutomaticDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
