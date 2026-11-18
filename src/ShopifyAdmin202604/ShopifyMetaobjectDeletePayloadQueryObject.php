<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metaobjectDelete` mutation.
 */
class ShopifyMetaobjectDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDeletePayload";

    /**
     * The ID of the deleted metaobject.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetaobjectDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
