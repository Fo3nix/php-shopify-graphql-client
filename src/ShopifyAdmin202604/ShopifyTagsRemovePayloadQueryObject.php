<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `tagsRemove` mutation.
 */
class ShopifyTagsRemovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TagsRemovePayload";

    /**
     * The object that was updated.
     */
    public function selectNode(?ShopifyTagsRemovePayloadNodeArgumentsObject $argsObject = null): ShopifyNodeInterfaceObject
    {
        $object = new ShopifyNodeInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyTagsRemovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
