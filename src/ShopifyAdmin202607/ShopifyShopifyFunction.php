<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFunctionsAppBridge;

/**
 * A Shopify Function.
 */
class ShopifyShopifyFunction
{
    protected $apiType;
    protected $apiVersion;
    protected $app;
    protected $appBridge;
    protected $appKey;
    protected $description;
    protected $handle;
    protected $id;
    protected $inputQuery;
    protected $title;
    protected $useCreationUi;

    
    /**
     * The API type of the Shopify Function.
     *
     * @return string
     */
    public function getApiType(): ?string
    {
        return $this->apiType;
    }

    
    /**
     * The API version of the Shopify Function.
     *
     * @return string
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    
    /**
     * The app that owns the Shopify Function.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The App Bridge information for the Shopify Function.
     *
     * @return ShopifyFunctionsAppBridge
     */
    public function getAppBridge(): ?ShopifyFunctionsAppBridge
    {
        return $this->appBridge;
    }

    
    /**
     * The client ID of the app that owns the Shopify Function.
     *
     * @return string
     */
    public function getAppKey(): ?string
    {
        return $this->appKey;
    }

    
    /**
     * The description of the Shopify Function.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The handle of the Shopify Function.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * The ID of the Shopify Function.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The input query of the Shopify Function.
     *
     * @return string
     */
    public function getInputQuery(): ?string
    {
        return $this->inputQuery;
    }

    
    /**
     * The title of the Shopify Function.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * If the Shopify Function uses the creation UI in the Admin.
     *
     * @return bool
     */
    public function getUseCreationUi(): ?bool
    {
        return $this->useCreationUi;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['apiType']) && $data['apiType'] !== null) {
                $instance->apiType = $data['apiType'];
            }
            if (isset($data['apiVersion']) && $data['apiVersion'] !== null) {
                $instance->apiVersion = $data['apiVersion'];
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['appBridge']) && $data['appBridge'] !== null) {
                $instance->appBridge = ShopifyFunctionsAppBridge::fromArray($data['appBridge']);
            }
            if (isset($data['appKey']) && $data['appKey'] !== null) {
                $instance->appKey = $data['appKey'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inputQuery']) && $data['inputQuery'] !== null) {
                $instance->inputQuery = $data['inputQuery'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['useCreationUi']) && $data['useCreationUi'] !== null) {
                $instance->useCreationUi = $data['useCreationUi'];
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
            if ($this->apiType !== null) {
                $data['apiType'] = $this->apiType;
            }
            if ($this->apiVersion !== null) {
                $data['apiVersion'] = $this->apiVersion;
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->appBridge !== null) {
                $data['appBridge'] = $this->appBridge->asArray();
            }
            if ($this->appKey !== null) {
                $data['appKey'] = $this->appKey;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inputQuery !== null) {
                $data['inputQuery'] = $this->inputQuery;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->useCreationUi !== null) {
                $data['useCreationUi'] = $this->useCreationUi;
            }
            return $data;
        }
}
