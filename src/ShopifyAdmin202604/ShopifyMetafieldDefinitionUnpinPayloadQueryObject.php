<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldDefinitionUnpin` mutation.
 */
class ShopifyMetafieldDefinitionUnpinPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionUnpinPayload";

    /**
     * The metafield definition that was unpinned.
     */
    public function selectUnpinnedDefinition(?ShopifyMetafieldDefinitionUnpinPayloadUnpinnedDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("unpinnedDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldDefinitionUnpinPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionUnpinUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionUnpinUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
