<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cashDrawerFindOrCreate` mutation.
 */
class ShopifyCashDrawerFindOrCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawerFindOrCreatePayload";

    /**
     * The cash drawer.
     */
    public function selectCashDrawer(?ShopifyCashDrawerFindOrCreatePayloadCashDrawerArgumentsObject $argsObject = null): ShopifyCashDrawerQueryObject
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
    public function selectUserErrors(?ShopifyCashDrawerFindOrCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCashDrawerFindOrCreateUserErrorQueryObject
    {
        $object = new ShopifyCashDrawerFindOrCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
