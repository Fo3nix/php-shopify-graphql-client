<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A quantity option related to a bundle.
 */
class ShopifyProductBundleComponentQuantityOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentQuantityOption";

    /**
     * The name of the option value.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The option that was created on the parent product.
     */
    public function selectParentOption(?ShopifyProductBundleComponentQuantityOptionParentOptionArgumentsObject $argsObject = null): ShopifyProductOptionQueryObject
    {
        $object = new ShopifyProductOptionQueryObject("parentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity values of the option.
     */
    public function selectValues(?ShopifyProductBundleComponentQuantityOptionValuesArgumentsObject $argsObject = null): ShopifyProductBundleComponentQuantityOptionValueQueryObject
    {
        $object = new ShopifyProductBundleComponentQuantityOptionValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
