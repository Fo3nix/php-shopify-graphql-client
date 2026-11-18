<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;

/**
 * Represents a shipping document.
 */
class ShopifyShippingObjectsShippingDocument
{
    protected $documentType;
    protected $format;
    protected $printedAt;
    protected $shippingLabelId;
    protected $url;

    
    /**
     * The type of the shipping document.
     *
     * @return string A ShopifyShippingDocumentTypeEnumObject value
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    
    /**
     * File format of the shipping document.
     *
     * @return string A ShopifyShippingEnumsFileFormatEnumObject value
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    
    /**
     * The last time the document was printed.
     *
     * @return Carbon
     */
    public function getPrintedAt(): ?Carbon
    {
        return $this->printedAt;
    }

    
    /**
     * The shipping label associated with the shipping document.
     *
     * @return string
     */
    public function getShippingLabelId(): ?string
    {
        return $this->shippingLabelId;
    }

    
    /**
     * URL of the shipping document.
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['documentType']) && $data['documentType'] !== null) {
                $instance->documentType = $data['documentType'];
            }
            if (isset($data['format']) && $data['format'] !== null) {
                $instance->format = $data['format'];
            }
            if (isset($data['printedAt']) && $data['printedAt'] !== null) {
                $instance->printedAt = new Carbon($data['printedAt']);
            }
            if (isset($data['shippingLabelId']) && $data['shippingLabelId'] !== null) {
                $instance->shippingLabelId = $data['shippingLabelId'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->documentType !== null) {
                $data['documentType'] = $this->documentType;
            }
            if ($this->format !== null) {
                $data['format'] = $this->format;
            }
            if ($this->printedAt !== null) {
                $data['printedAt'] = $this->printedAt->toIso8601String();
            }
            if ($this->shippingLabelId !== null) {
                $data['shippingLabelId'] = $this->shippingLabelId;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
