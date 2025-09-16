<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StorefrontAccessTokenQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessToken";

    public function selectAccessScopes(StorefrontAccessTokenAccessScopesArgumentsObject $argsObject = null)
    {
        $object = new AccessScopeQueryObject("accessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAccessToken()
    {
        $this->selectField("accessToken");

        return $this;
    }

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

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
