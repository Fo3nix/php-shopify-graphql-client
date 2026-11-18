<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourceOperationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourceOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPublication;

/**
 * A list of products with publishing and pricing information associated with company locations.
 *
 * Company location catalogs can include an optional publication to control product visibility and a price list to customize pricing. When a publication isn't associated with the catalog, product availability is determined by the sales channel.
 */
class ShopifyCompanyLocationCatalog implements ShopifyCatalog, ShopifyNode
{
    protected $companyLocations;
    protected $companyLocationsCount;
    protected $id;
    protected $operations;
    protected $priceList;
    protected $publication;
    protected $status;
    protected $title;

    
    /**
     * The company locations associated with the catalog.
     *
     * @return ShopifyCompanyLocationConnection
     */
    public function getCompanyLocations(): ?ShopifyCompanyLocationConnection
    {
        return $this->companyLocations;
    }

    
    /**
     * The number of company locations associated with the catalog.
     *
     * @return ShopifyCount
     */
    public function getCompanyLocationsCount(): ?ShopifyCount
    {
        return $this->companyLocationsCount;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Most recent catalog operations.
     *
     * @return ShopifyResourceOperation[]
     */
    public function getOperations(): ?array
    {
        return $this->operations;
    }

    
    /**
     * The price list associated with the catalog.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList
    {
        return $this->priceList;
    }

    
    /**
     * A group of products and collections that's published to a catalog.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The status of the catalog.
     *
     * @return string A ShopifyCatalogStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The name of the catalog.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['companyLocations']) && $data['companyLocations'] !== null) {
                $instance->companyLocations = ShopifyCompanyLocationConnection::fromArray($data['companyLocations']);
            }
            if (isset($data['companyLocationsCount']) && $data['companyLocationsCount'] !== null) {
                $instance->companyLocationsCount = ShopifyCount::fromArray($data['companyLocationsCount']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['operations']) && $data['operations'] !== null) {
                $instance->operations = array_map(function($item) { return ShopifyResourceOperationHydrator::fromArray($item); }, $data['operations']);
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = ShopifyPriceList::fromArray($data['priceList']);
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->companyLocations !== null) {
                $data['companyLocations'] = $this->companyLocations->asArray();
            }
            if ($this->companyLocationsCount !== null) {
                $data['companyLocationsCount'] = $this->companyLocationsCount->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->operations !== null) {
                $data['operations'] = array_map(function($item) { return ShopifyResourceOperationHydrator::toArray($item); }, $this->operations);
            }
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
