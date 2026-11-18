<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions)
 * that determine what subtypes of resources a metafield definition applies to.
 */
class ShopifyMetafieldDefinitionConstraintsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraints";

    /**
     * The category of resource subtypes that the definition applies to.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The specific constraint subtype values that the definition applies to.
     */
    public function selectValues(?ShopifyMetafieldDefinitionConstraintsValuesArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConstraintValueConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConstraintValueConnectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
