<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ProductTaxonomyNode
{
    protected $fullName;
    protected $id;
    protected $isLeaf;
    protected $isRoot;
    protected $name;

    
    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->isLeaf;
    }

    
    /**
     * @return bool
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fullName']) && $data['fullName'] !== null) {
                $instance->fullName = $data['fullName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isLeaf']) && $data['isLeaf'] !== null) {
                $instance->isLeaf = $data['isLeaf'];
            }
            if (isset($data['isRoot']) && $data['isRoot'] !== null) {
                $instance->isRoot = $data['isRoot'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->fullName !== null) {
                $data['fullName'] = $this->fullName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isLeaf !== null) {
                $data['isLeaf'] = $this->isLeaf;
            }
            if ($this->isRoot !== null) {
                $data['isRoot'] = $this->isRoot;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
