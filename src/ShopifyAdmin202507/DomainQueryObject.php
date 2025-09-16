<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DomainQueryObject extends QueryObject
{
    const OBJECT_NAME = "Domain";

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

    public function selectLocalization(DomainLocalizationArgumentsObject $argsObject = null)
    {
        $object = new DomainLocalizationQueryObject("localization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketWebPresence(DomainMarketWebPresenceArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceQueryObject("marketWebPresence");
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
