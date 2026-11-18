<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A diagnostic (error or warning) emitted during a subscription contract calculation.
 */
class ShopifySubscriptionContractCalculationDiagnostic
{
    protected $code;
    protected $field;
    protected $message;

    
    /**
     * The diagnostic code.
     *
     * @return string A ShopifySubscriptionContractCalculationDiagnosticCodeEnumObject value
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The path to the field on the calculation result that the diagnostic refers to, if any. Fields of the calculated contract start at `calculatedContract`, and line paths are keyed by the line's `id` on the calculated contract.
     *
     * @return string[]
     */
    public function getField(): ?array
    {
        return $this->field;
    }

    
    /**
     * A human-readable message describing the diagnostic.
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
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
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
