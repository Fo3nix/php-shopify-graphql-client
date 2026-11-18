<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticBasicCreate` mutation.
 */
class ShopifyDiscountAutomaticBasicCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBasicCreatePayload";

    /**
     * The automatic discount that was created.
     */
    public function selectAutomaticDiscountNode(?ShopifyDiscountAutomaticBasicCreatePayloadAutomaticDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeQueryObject
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
    public function selectUserErrors(?ShopifyDiscountAutomaticBasicCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
