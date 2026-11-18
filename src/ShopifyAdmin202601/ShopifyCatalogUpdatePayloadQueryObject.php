<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `catalogUpdate` mutation.
 */
class ShopifyCatalogUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogUpdatePayload";

    /**
     * The updated catalog.
     */
    public function selectCatalog(?ShopifyCatalogUpdatePayloadCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
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
    public function selectUserErrors(?ShopifyCatalogUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCatalogUserErrorQueryObject
    {
        $object = new ShopifyCatalogUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
