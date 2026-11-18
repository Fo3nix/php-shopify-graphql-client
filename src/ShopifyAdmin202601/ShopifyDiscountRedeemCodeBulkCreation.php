<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountRedeemCodeBulkCreationCodeConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCodeNode;

/**
 * The properties and status of a bulk discount redeem code creation operation.
 */
class ShopifyDiscountRedeemCodeBulkCreation implements ShopifyNode
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
     * The result of each code creation operation associated with the bulk creation operation including any errors that might have occurred during the operation.
     *
     * @return ShopifyDiscountRedeemCodeBulkCreationCodeConnection
     */
    public function getCodes(): ?ShopifyDiscountRedeemCodeBulkCreationCodeConnection
    {
        return $this->codes;
    }

    
    /**
     * The number of codes to create.
     *
     * @return int
     */
    public function getCodesCount(): ?int
    {
        return $this->codesCount;
    }

    
    /**
     * The date and time when the bulk creation was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The code discount associated with the created codes.
     *
     * @return ShopifyDiscountCodeNode
     */
    public function getDiscountCode(): ?ShopifyDiscountCodeNode
    {
        return $this->discountCode;
    }

    
    /**
     * Whether the bulk creation is still queued (`false`) or has been run (`true`).
     *
     * @return bool
     */
    public function getDone(): ?bool
    {
        return $this->done;
    }

    
    /**
     * The number of codes that weren't created successfully.
     *
     * @return int
     */
    public function getFailedCount(): ?int
    {
        return $this->failedCount;
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
     * The number of codes created successfully.
     *
     * @return int
     */
    public function getImportedCount(): ?int
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
                $instance->codes = ShopifyDiscountRedeemCodeBulkCreationCodeConnection::fromArray($data['codes']);
            }
            if (isset($data['codesCount']) && $data['codesCount'] !== null) {
                $instance->codesCount = $data['codesCount'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['discountCode']) && $data['discountCode'] !== null) {
                $instance->discountCode = ShopifyDiscountCodeNode::fromArray($data['discountCode']);
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
