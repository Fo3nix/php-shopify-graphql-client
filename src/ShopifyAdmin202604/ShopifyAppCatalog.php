<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceOperationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublication;

/**
 * A catalog that defines the publication associated with an app.
 */
class ShopifyAppCatalog implements ShopifyCatalog, ShopifyNode
{
    protected $apps;
    protected $channels;
    protected $id;
    protected $operations;
    protected $priceList;
    protected $publication;
    protected $status;
    protected $title;

    
    /**
     * The apps associated with the catalog.
     *
     * @return ShopifyAppConnection
     */
    public function getApps(): ?ShopifyAppConnection
    {
        return $this->apps;
    }

    
    /**
     * The channels associated with the catalog.
     *
     * @return ShopifyChannelConnection
     */
    public function getChannels(): ?ShopifyChannelConnection
    {
        return $this->channels;
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
            if (isset($data['apps']) && $data['apps'] !== null) {
                $instance->apps = ShopifyAppConnection::fromArray($data['apps']);
            }
            if (isset($data['channels']) && $data['channels'] !== null) {
                $instance->channels = ShopifyChannelConnection::fromArray($data['channels']);
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
            if ($this->apps !== null) {
                $data['apps'] = $this->apps->asArray();
            }
            if ($this->channels !== null) {
                $data['channels'] = $this->channels->asArray();
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
