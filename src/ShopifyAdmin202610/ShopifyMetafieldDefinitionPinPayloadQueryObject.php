<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldDefinitionPin` mutation.
 */
class ShopifyMetafieldDefinitionPinPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionPinPayload";

    /**
     * The metafield definition that was pinned.
     */
    public function selectPinnedDefinition(?ShopifyMetafieldDefinitionPinPayloadPinnedDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("pinnedDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldDefinitionPinPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionPinUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionPinUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
