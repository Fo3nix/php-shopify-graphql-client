<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `catalogDelete` mutation.
 */
class ShopifyCatalogDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogDeletePayload";

    /**
     * The ID of the deleted catalog.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCatalogDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCatalogUserErrorQueryObject
    {
        $object = new ShopifyCatalogUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
