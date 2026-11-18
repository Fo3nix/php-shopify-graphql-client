<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A barcode associated with a product variant.
 *
 * A variant supports up to 20 barcodes, each of
 * which can have a
 * [type](https://shopify.dev/docs/api/admin-graphql/latest/enums/BarcodeType).
 * Barcode types are validated against their respective format standards.
 */
class ShopifyProductVariantBarcode
{
    protected $type;
    protected $value;

    
    /**
     * The associated standard that the barcode conforms to. Barcode types are validated against their
     * respective format standards. A `null` format denotes no type provided on write and the value is
     * stored as entered.
     *
     * @return string A ShopifyBarcodeTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The value of the barcode. For example, `9780262033848`. Maximum length: 255 characters.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
