<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metaobjectDefinitionUpdate` mutation.
 */
class ShopifyMetaobjectDefinitionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionUpdatePayload";

    /**
     * The updated metaobject definition.
     */
    public function selectMetaobjectDefinition(?ShopifyMetaobjectDefinitionUpdatePayloadMetaobjectDefinitionArgumentsObject $argsObject = null): ShopifyMetaobjectDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("metaobjectDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetaobjectDefinitionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
