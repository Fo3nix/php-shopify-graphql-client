<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UTMParametersQueryObject extends QueryObject
{
    const OBJECT_NAME = "UTMParameters";

    public function selectCampaign()
    {
        $this->selectField("campaign");

        return $this;
    }

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }

    public function selectMedium()
    {
        $this->selectField("medium");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectTerm()
    {
        $this->selectField("term");

        return $this;
    }
}
