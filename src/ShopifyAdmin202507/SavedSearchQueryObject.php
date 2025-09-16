<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SavedSearchQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearch";

    public function selectFilters(SavedSearchFiltersArgumentsObject $argsObject = null)
    {
        $object = new SearchFilterQueryObject("filters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectResourceType()
    {
        $this->selectField("resourceType");

        return $this;
    }

    public function selectSearchTerms()
    {
        $this->selectField("searchTerms");

        return $this;
    }
}
