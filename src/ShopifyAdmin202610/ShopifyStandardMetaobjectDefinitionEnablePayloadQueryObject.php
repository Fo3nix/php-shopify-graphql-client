<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `standardMetaobjectDefinitionEnable` mutation.
 */
class ShopifyStandardMetaobjectDefinitionEnablePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectDefinitionEnablePayload";

    /**
     * The metaobject definition that was enabled using the standard template.
     */
    public function selectMetaobjectDefinition(?ShopifyStandardMetaobjectDefinitionEnablePayloadMetaobjectDefinitionArgumentsObject $argsObject = null): ShopifyMetaobjectDefinitionQueryObject
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
    public function selectUserErrors(?ShopifyStandardMetaobjectDefinitionEnablePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
