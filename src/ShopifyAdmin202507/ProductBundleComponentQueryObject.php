<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponent";

    public function selectComponentProduct(ProductBundleComponentComponentProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("componentProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponentVariants(ProductBundleComponentComponentVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("componentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponentVariantsCount(ProductBundleComponentComponentVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("componentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOptionSelections(ProductBundleComponentOptionSelectionsArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentOptionSelectionQueryObject("optionSelections");
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

    public function selectQuantityOption(ProductBundleComponentQuantityOptionArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentQuantityOptionQueryObject("quantityOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
