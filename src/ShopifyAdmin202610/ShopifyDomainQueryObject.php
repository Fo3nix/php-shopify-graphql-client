<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDomainQueryObject extends QueryObject
{
    const OBJECT_NAME = "Domain";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectHost()
    {
        $this->selectField("host");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLocalization(ShopifyDomainLocalizationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDomainLocalizationQueryObject("localization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketWebPresence(ShopifyDomainMarketWebPresenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceQueryObject("marketWebPresence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSslEnabled()
    {
        $this->selectField("sslEnabled");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
