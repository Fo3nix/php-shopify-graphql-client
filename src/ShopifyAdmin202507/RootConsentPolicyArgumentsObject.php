<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootConsentPolicyArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $countryCode;
    protected $regionCode;
    protected $consentRequired;
    protected $dataSaleOptOutRequired;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setCountryCode($privacyCountryCode)
    {
        $this->countryCode = new RawObject($privacyCountryCode);

        return $this;
    }

    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    public function setConsentRequired($consentRequired)
    {
        $this->consentRequired = $consentRequired;

        return $this;
    }

    public function setDataSaleOptOutRequired($dataSaleOptOutRequired)
    {
        $this->dataSaleOptOutRequired = $dataSaleOptOutRequired;

        return $this;
    }
}
