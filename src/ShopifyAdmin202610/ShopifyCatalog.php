<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourceOperationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourceOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPublication;

/**
 * A list of products with publishing and pricing information.
 * A catalog can be associated with a specific context, such as a [`Market`](https://shopify.dev/api/admin-graphql/current/objects/market), [`CompanyLocation`](https://shopify.dev/api/admin-graphql/current/objects/companylocation), or [`App`](https://shopify.dev/api/admin-graphql/current/objects/app).
 *
 * Catalogs can optionally include a publication to control product visibility and a price list to customize pricing. When a publication isn't associated with a catalog, product availability is determined by the sales channel.
 */
interface ShopifyCatalog extends ShopifyNode
{
    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * Most recent catalog operations.
     *
     * @return ShopifyResourceOperation[]
     */
    public function getOperations(): ?array;

    
    /**
     * The price list associated with the catalog.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList;

    
    /**
     * A group of products and collections that's published to a catalog.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication;

    
    /**
     * The status of the catalog.
     *
     * @return string A ShopifyCatalogStatusEnumObject value
     */
    public function getStatus(): ?string;

    
    /**
     * The name of the catalog.
     *
     * @return string
     */
    public function getTitle(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
