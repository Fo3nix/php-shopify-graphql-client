<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticBxgyCreate` mutation.
 */
class ShopifyDiscountAutomaticBxgyCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBxgyCreatePayload";

    /**
     * The automatic discount that was created.
     */
    public function selectAutomaticDiscountNode(?ShopifyDiscountAutomaticBxgyCreatePayloadAutomaticDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeQueryObject
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
    public function selectUserErrors(?ShopifyDiscountAutomaticBxgyCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
