<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `catalogContextUpdate` mutation.
 */
class ShopifyCatalogContextUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogContextUpdatePayload";

    /**
     * The updated catalog.
     */
    public function selectCatalog(?ShopifyCatalogContextUpdatePayloadCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
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
    public function selectUserErrors(?ShopifyCatalogContextUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCatalogUserErrorQueryObject
    {
        $object = new ShopifyCatalogUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
