<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldsDelete` mutation.
 */
class ShopifyMetafieldsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldsDeletePayload";

    /**
     * List of metafield identifiers that were deleted, null if the corresponding metafield isn't found.
     */
    public function selectDeletedMetafields(?ShopifyMetafieldsDeletePayloadDeletedMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldIdentifierQueryObject
    {
        $object = new ShopifyMetafieldIdentifierQueryObject("deletedMetafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
