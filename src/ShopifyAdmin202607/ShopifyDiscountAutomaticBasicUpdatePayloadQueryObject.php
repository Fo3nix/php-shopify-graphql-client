<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticBasicUpdate` mutation.
 */
class ShopifyDiscountAutomaticBasicUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBasicUpdatePayload";

    /**
     * The automatic discount that was updated.
     */
    public function selectAutomaticDiscountNode(?ShopifyDiscountAutomaticBasicUpdatePayloadAutomaticDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("automaticDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountAutomaticBasicUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
