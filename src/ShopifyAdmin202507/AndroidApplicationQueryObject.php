<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AndroidApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AndroidApplication";

    public function selectAppLinksEnabled()
    {
        $this->selectField("appLinksEnabled");

        return $this;
    }

    public function selectApplicationId()
    {
        $this->selectField("applicationId");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectSha256CertFingerprints()
    {
        $this->selectField("sha256CertFingerprints");

        return $this;
    }
}
