<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponent";

    public function selectComponentProduct(ShopifyProductBundleComponentComponentProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("componentProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponentVariants(ShopifyProductBundleComponentComponentVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("componentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponentVariantsCount(ShopifyProductBundleComponentComponentVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("componentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOptionSelections(ShopifyProductBundleComponentOptionSelectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentOptionSelectionQueryObject("optionSelections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectQuantityOption(ShopifyProductBundleComponentQuantityOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentQuantityOptionQueryObject("quantityOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
