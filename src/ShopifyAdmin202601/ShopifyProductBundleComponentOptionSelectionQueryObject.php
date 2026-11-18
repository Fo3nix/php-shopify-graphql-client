<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A relationship between a component option and a parent option.
 */
class ShopifyProductBundleComponentOptionSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentOptionSelection";

    /**
     * The option that existed on the component product prior to the fixed bundle creation.
     */
    public function selectComponentOption(?ShopifyProductBundleComponentOptionSelectionComponentOptionArgumentsObject $argsObject = null): ShopifyProductOptionQueryObject
    {
        $object = new ShopifyProductOptionQueryObject("componentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The option that was created on the parent product.
     */
    public function selectParentOption(?ShopifyProductBundleComponentOptionSelectionParentOptionArgumentsObject $argsObject = null): ShopifyProductOptionQueryObject
    {
        $object = new ShopifyProductOptionQueryObject("parentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The component option values that are actively selected for this relationship.
     */
    public function selectValues(?ShopifyProductBundleComponentOptionSelectionValuesArgumentsObject $argsObject = null): ShopifyProductBundleComponentOptionSelectionValueQueryObject
    {
        $object = new ShopifyProductBundleComponentOptionSelectionValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
