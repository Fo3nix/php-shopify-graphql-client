<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Taxonomy";

    public function selectCategories(TaxonomyCategoriesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryConnectionQueryObject("categories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
