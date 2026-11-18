<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticAppUpdate` mutation.
 */
class ShopifyDiscountAutomaticAppUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticAppUpdatePayload";

    /**
     * The updated automatic discount that the app provides.
     */
    public function selectAutomaticAppDiscount(?ShopifyDiscountAutomaticAppUpdatePayloadAutomaticAppDiscountArgumentsObject $argsObject = null): ShopifyDiscountAutomaticAppQueryObject
    {
        $object = new ShopifyDiscountAutomaticAppQueryObject("automaticAppDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountAutomaticAppUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
