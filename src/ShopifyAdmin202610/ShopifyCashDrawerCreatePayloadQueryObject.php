<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cashDrawerCreate` mutation.
 */
class ShopifyCashDrawerCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawerCreatePayload";

    /**
     * The created cash drawer.
     */
    public function selectCashDrawer(?ShopifyCashDrawerCreatePayloadCashDrawerArgumentsObject $argsObject = null): ShopifyCashDrawerQueryObject
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
    public function selectUserErrors(?ShopifyCashDrawerCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCashDrawerCreateUserErrorQueryObject
    {
        $object = new ShopifyCashDrawerCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
