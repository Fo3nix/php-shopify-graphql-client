<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsAnnotation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsAnnotationUpdateUserError;

/**
 * Return type for `analyticsAnnotationUpdate` mutation.
 */
class ShopifyAnalyticsAnnotationUpdatePayload
{
    protected $analyticsAnnotation;
    protected $userErrors;

    
    /**
     * The updated analytics annotation.
     *
     * @return ShopifyAnalyticsAnnotation
     */
    public function getAnalyticsAnnotation(): ?ShopifyAnalyticsAnnotation
    {
        return $this->analyticsAnnotation;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyAnalyticsAnnotationUpdateUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['analyticsAnnotation']) && $data['analyticsAnnotation'] !== null) {
                $instance->analyticsAnnotation = ShopifyAnalyticsAnnotation::fromArray($data['analyticsAnnotation']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyAnalyticsAnnotationUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->analyticsAnnotation !== null) {
                $data['analyticsAnnotation'] = $this->analyticsAnnotation->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
