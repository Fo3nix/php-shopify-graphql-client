<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `tagsAdd` mutation.
 */
class ShopifyTagsAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TagsAddPayload";

    /**
     * The object that was updated.
     */
    public function selectNode(?ShopifyTagsAddPayloadNodeArgumentsObject $argsObject = null): ShopifyNodeInterfaceObject
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
    public function selectUserErrors(?ShopifyTagsAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
