<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `catalogCreate` mutation.
 */
class ShopifyCatalogCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogCreatePayload";

    /**
     * The newly created catalog.
     */
    public function selectCatalog(?ShopifyCatalogCreatePayloadCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
    {
        $object = new ShopifyCatalogInterfaceObject("catalog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCatalogCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCatalogUserErrorQueryObject
    {
        $object = new ShopifyCatalogUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
