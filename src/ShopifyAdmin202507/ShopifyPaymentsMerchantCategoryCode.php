<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopifyPaymentsMerchantCategoryCode
{
    protected $category;
    protected $categoryLabel;
    protected $code;
    protected $id;
    protected $subcategoryLabel;

    
    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    
    /**
     * @return string
     */
    public function getCategoryLabel()
    {
        return $this->categoryLabel;
    }

    
    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getSubcategoryLabel()
    {
        return $this->subcategoryLabel;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = $data['category'];
            }
            if (isset($data['categoryLabel']) && $data['categoryLabel'] !== null) {
                $instance->categoryLabel = $data['categoryLabel'];
            }
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['subcategoryLabel']) && $data['subcategoryLabel'] !== null) {
                $instance->subcategoryLabel = $data['subcategoryLabel'];
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
            if ($this->category !== null) {
                $data['category'] = $this->category;
            }
            if ($this->categoryLabel !== null) {
                $data['categoryLabel'] = $this->categoryLabel;
            }
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->subcategoryLabel !== null) {
                $data['subcategoryLabel'] = $this->subcategoryLabel;
            }
            return $data;
        }
}
