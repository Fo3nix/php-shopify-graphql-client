<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticAppCreate` mutation.
 */
class ShopifyDiscountAutomaticAppCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticAppCreatePayload";

    /**
     * The automatic discount that the app manages.
     */
    public function selectAutomaticAppDiscount(?ShopifyDiscountAutomaticAppCreatePayloadAutomaticAppDiscountArgumentsObject $argsObject = null): ShopifyDiscountAutomaticAppQueryObject
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
    public function selectUserErrors(?ShopifyDiscountAutomaticAppCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
