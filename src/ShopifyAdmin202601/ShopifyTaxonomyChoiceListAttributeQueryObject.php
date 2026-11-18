<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify product taxonomy choice list attribute.
 */
class ShopifyTaxonomyChoiceListAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyChoiceListAttribute";

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
     * A list of values on the choice list attribute.
     */
    public function selectValues(?ShopifyTaxonomyChoiceListAttributeValuesArgumentsObject $argsObject = null): ShopifyTaxonomyValueConnectionQueryObject
    {
        $object = new ShopifyTaxonomyValueConnectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
