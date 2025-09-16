<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAbandonedCheckoutsCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $savedSearchId;
    protected $limit;

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setSavedSearchId($savedSearchId)
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
