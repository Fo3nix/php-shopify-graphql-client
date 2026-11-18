<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productFullSync` mutation.
 */
class ShopifyProductFullSyncPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFullSyncPayload";

    /**
     * The ID for the full sync operation.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductFullSyncPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductFullSyncUserErrorQueryObject
    {
        $object = new ShopifyProductFullSyncUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
