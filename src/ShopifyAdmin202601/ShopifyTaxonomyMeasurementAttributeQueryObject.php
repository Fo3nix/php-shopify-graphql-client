<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify product taxonomy measurement attribute.
 */
class ShopifyTaxonomyMeasurementAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyMeasurementAttribute";

    /**
     * The unique ID of the TaxonomyAttribute.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the product taxonomy attribute. For example, Color.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The product taxonomy attribute options.
     */
    public function selectOptions(?ShopifyTaxonomyMeasurementAttributeOptionsArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
