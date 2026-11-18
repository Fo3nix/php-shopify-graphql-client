<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metaobjectDefinitionCreate` mutation.
 */
class ShopifyMetaobjectDefinitionCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionCreatePayload";

    /**
     * The created metaobject definition.
     */
    public function selectMetaobjectDefinition(?ShopifyMetaobjectDefinitionCreatePayloadMetaobjectDefinitionArgumentsObject $argsObject = null): ShopifyMetaobjectDefinitionQueryObject
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
    public function selectUserErrors(?ShopifyMetaobjectDefinitionCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
