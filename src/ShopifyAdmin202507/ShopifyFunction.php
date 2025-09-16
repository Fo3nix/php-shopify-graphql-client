<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FunctionsAppBridge;

class ShopifyFunction
{
    protected $apiType;
    protected $apiVersion;
    protected $app;
    protected $appBridge;
    protected $appKey;
    protected $description;
    protected $id;
    protected $inputQuery;
    protected $title;
    protected $useCreationUi;

    
    /**
     * @return string
     */
    public function getApiType()
    {
        return $this->apiType;
    }

    
    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return FunctionsAppBridge
     */
    public function getAppBridge()
    {
        return $this->appBridge;
    }

    
    /**
     * @return string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getInputQuery()
    {
        return $this->inputQuery;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return bool
     */
    public function getUseCreationUi()
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
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['appBridge']) && $data['appBridge'] !== null) {
                $instance->appBridge = FunctionsAppBridge::fromArray($data['appBridge']);
            }
            if (isset($data['appKey']) && $data['appKey'] !== null) {
                $instance->appKey = $data['appKey'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
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
