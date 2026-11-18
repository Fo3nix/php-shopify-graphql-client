<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cashDrawerUpdate` mutation.
 */
class ShopifyCashDrawerUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawerUpdatePayload";

    /**
     * The updated cash drawer.
     */
    public function selectCashDrawer(?ShopifyCashDrawerUpdatePayloadCashDrawerArgumentsObject $argsObject = null): ShopifyCashDrawerQueryObject
    {
        $object = new ShopifyCashDrawerQueryObject("cashDrawer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCashDrawerUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCashDrawerUpdateUserErrorQueryObject
    {
        $object = new ShopifyCashDrawerUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
