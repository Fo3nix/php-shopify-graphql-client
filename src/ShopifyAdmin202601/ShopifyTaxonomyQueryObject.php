<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Taxonomy";

    public function selectCategories(ShopifyTaxonomyCategoriesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryConnectionQueryObject("categories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
