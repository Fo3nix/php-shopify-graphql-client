<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyIdentityProviderSubjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "IdentityProviderSubject";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProviderName()
    {
        $this->selectField("providerName");

        return $this;
    }

    public function selectSubject()
    {
        $this->selectField("subject");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
