<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A warning indicating that a discount cannot be applied to a draft order.
 */
class ShopifyDraftOrderDiscountNotAppliedWarning implements ShopifyDraftOrderWarning
{
    protected $discountCode;
    protected $discountTitle;
    protected $errorCode;
    protected $field;
    protected $message;

    
    /**
     * The code of the discount that can't be applied.
     *
     * @return string
     */
    public function getDiscountCode(): ?string
    {
        return $this->discountCode;
    }

    
    /**
     * The title of the discount that can't be applied.
     *
     * @return string
     */
    public function getDiscountTitle(): ?string
    {
        return $this->discountTitle;
    }

    
    /**
     * The error code.
     *
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    
    /**
     * The input field that the warning applies to.
     *
     * @return string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    
    /**
     * The warning message.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discountCode']) && $data['discountCode'] !== null) {
                $instance->discountCode = $data['discountCode'];
            }
            if (isset($data['discountTitle']) && $data['discountTitle'] !== null) {
                $instance->discountTitle = $data['discountTitle'];
            }
            if (isset($data['errorCode']) && $data['errorCode'] !== null) {
                $instance->errorCode = $data['errorCode'];
            }
            if (isset($data['field']) && $data['field'] !== null) {
                $instance->field = $data['field'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
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
            if ($this->discountCode !== null) {
                $data['discountCode'] = $this->discountCode;
            }
            if ($this->discountTitle !== null) {
                $data['discountTitle'] = $this->discountTitle;
            }
            if ($this->errorCode !== null) {
                $data['errorCode'] = $this->errorCode;
            }
            if ($this->field !== null) {
                $data['field'] = $this->field;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            return $data;
        }
}
