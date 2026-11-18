<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The market’s web presence, which defines its SEO strategy. This can be a different domain
 * (e.g. `example.ca`), subdomain (e.g. `ca.example.com`), or subfolders of the primary
 * domain (e.g. `example.com/en-ca`). Each web presence comprises one or more language
 * variants. If a market does not have its own web presence, it is accessible on the shop’s
 * primary domain via [country
 * selectors](https://shopify.dev/themes/internationalization/multiple-currencies-languages#the-country-selector).
 *
 * Note: while the domain/subfolders defined by a market’s web presence are not applicable to
 * custom storefronts, which must manage their own domains and routing, the languages chosen
 * here do govern [the languages available on the Storefront
 * API](https://shopify.dev/custom-storefronts/internationalization/multiple-languages) for the countries in
 * this market.
 */
class ShopifyMarketWebPresenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresence";

    /**
     * The ShopLocale object for the alternate locales. When a domain is used, these locales will be
     * available as language-specific subfolders. For example, if English is an
     * alternate locale, and `example.ca` is the market’s domain, then
     * `example.ca/en` will load in English.
     */
    public function selectAlternateLocales(?ShopifyMarketWebPresenceAlternateLocalesArgumentsObject $argsObject = null): ShopifyShopLocaleQueryObject
    {
        $object = new ShopifyShopLocaleQueryObject("alternateLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ShopLocale object for the default locale. When a domain is used, this is the locale that will
     * be used when the domain root is accessed. For example, if French is the default locale,
     * and `example.ca` is the market’s domain, then `example.ca` will load in French.
     */
    public function selectDefaultLocale(?ShopifyMarketWebPresenceDefaultLocaleArgumentsObject $argsObject = null): ShopifyShopLocaleQueryObject
    {
        $object = new ShopifyShopLocaleQueryObject("defaultLocale");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The web presence’s domain.
     * This field will be null if `subfolderSuffix` isn't null.
     */
    public function selectDomain(?ShopifyMarketWebPresenceDomainArgumentsObject $argsObject = null): ShopifyDomainQueryObject
    {
        $object = new ShopifyDomainQueryObject("domain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The associated market. This can be null for a web presence that isn't associated with a market.
     *
     * @deprecated Use `markets` instead.
     */
    public function selectMarket(?ShopifyMarketWebPresenceMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The associated markets for this web presence.
     */
    public function selectMarkets(?ShopifyMarketWebPresenceMarketsArgumentsObject $argsObject = null): ShopifyMarketConnectionQueryObject
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of root URLs for each of the web presence’s locales. As of version `2024-04` this value will no longer have a trailing slash.
     */
    public function selectRootUrls(?ShopifyMarketWebPresenceRootUrlsArgumentsObject $argsObject = null): ShopifyMarketWebPresenceRootUrlQueryObject
    {
        $object = new ShopifyMarketWebPresenceRootUrlQueryObject("rootUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The market-specific suffix of the subfolders defined by the web presence. Example: in `/en-us` the subfolder suffix is `us`. This field will be null if `domain` isn't null.
     */
    public function selectSubfolderSuffix(): static
    {
        $this->selectField("subfolderSuffix");

        return $this;
    }
}
