<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A unique string that represents the address of a Shopify store on the Internet.
 */
class ShopifyDomainQueryObject extends QueryObject
{
    const OBJECT_NAME = "Domain";

    /**
     * The date and time when the domain was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The host name of the domain. For example, `example.com`.
     */
    public function selectHost(): static
    {
        $this->selectField("host");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The localization of the domain, if the domain doesn't redirect.
     */
    public function selectLocalization(?ShopifyDomainLocalizationArgumentsObject $argsObject = null): ShopifyDomainLocalizationQueryObject
    {
        $object = new ShopifyDomainLocalizationQueryObject("localization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The web presence of the domain.
     */
    public function selectMarketWebPresence(?ShopifyDomainMarketWebPresenceArgumentsObject $argsObject = null): ShopifyMarketWebPresenceQueryObject
    {
        $object = new ShopifyMarketWebPresenceQueryObject("marketWebPresence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether SSL is enabled.
     */
    public function selectSslEnabled(): static
    {
        $this->selectField("sslEnabled");

        return $this;
    }

    /**
     * The URL of the domain (for example, `https://example.com`).
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
