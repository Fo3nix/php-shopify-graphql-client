<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FunctionsAppBridge;

class AppDiscountType
{
    protected $app;
    protected $appBridge;
    protected $appKey;
    protected $description;
    protected $discountClass;
    protected $discountClasses;
    protected $functionId;
    protected $targetType;
    protected $title;

    
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
     * @return DiscountClassEnumObject
     */
    public function getDiscountClass()
    {
        return $this->discountClass;
    }

    
    /**
     * @return DiscountClassEnumObject[]
     */
    public function getDiscountClasses()
    {
        return $this->discountClasses;
    }

    
    /**
     * @return string
     */
    public function getFunctionId()
    {
        return $this->functionId;
    }

    
    /**
     * @return DiscountApplicationTargetTypeEnumObject
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    
    /**
     * @return string
     */
    public function getTitle()
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
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['functionId']) && $data['functionId'] !== null) {
                $instance->functionId = $data['functionId'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
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
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->functionId !== null) {
                $data['functionId'] = $this->functionId;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
