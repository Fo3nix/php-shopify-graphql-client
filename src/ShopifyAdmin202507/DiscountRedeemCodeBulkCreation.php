<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountRedeemCodeBulkCreationCodeConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCodeNode;

class DiscountRedeemCodeBulkCreation
{
    protected $codes;
    protected $codesCount;
    protected $createdAt;
    protected $discountCode;
    protected $done;
    protected $failedCount;
    protected $id;
    protected $importedCount;

    
    /**
     * @return DiscountRedeemCodeBulkCreationCodeConnection
     */
    public function getCodes()
    {
        return $this->codes;
    }

    
    /**
     * @return int
     */
    public function getCodesCount()
    {
        return $this->codesCount;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return DiscountCodeNode
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    
    /**
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    
    /**
     * @return int
     */
    public function getFailedCount()
    {
        return $this->failedCount;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return int
     */
    public function getImportedCount()
    {
        return $this->importedCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['codes']) && $data['codes'] !== null) {
                $instance->codes = DiscountRedeemCodeBulkCreationCodeConnection::fromArray($data['codes']);
            }
            if (isset($data['codesCount']) && $data['codesCount'] !== null) {
                $instance->codesCount = $data['codesCount'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['discountCode']) && $data['discountCode'] !== null) {
                $instance->discountCode = DiscountCodeNode::fromArray($data['discountCode']);
            }
            if (isset($data['done']) && $data['done'] !== null) {
                $instance->done = $data['done'];
            }
            if (isset($data['failedCount']) && $data['failedCount'] !== null) {
                $instance->failedCount = $data['failedCount'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['importedCount']) && $data['importedCount'] !== null) {
                $instance->importedCount = $data['importedCount'];
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
            if ($this->codes !== null) {
                $data['codes'] = $this->codes->asArray();
            }
            if ($this->codesCount !== null) {
                $data['codesCount'] = $this->codesCount;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->discountCode !== null) {
                $data['discountCode'] = $this->discountCode->asArray();
            }
            if ($this->done !== null) {
                $data['done'] = $this->done;
            }
            if ($this->failedCount !== null) {
                $data['failedCount'] = $this->failedCount;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->importedCount !== null) {
                $data['importedCount'] = $this->importedCount;
            }
            return $data;
        }
}
