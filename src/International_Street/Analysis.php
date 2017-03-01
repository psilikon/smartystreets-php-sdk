<?php

namespace SmartyStreets\PhpSdk\International_Street;

require_once(dirname(dirname(__FILE__)) . '/ArrayUtil.php');
use SmartyStreets\PhpSdk\ArrayUtil;

class Analysis {
    //region [ Fields ]

    private $verificationStatus,
            $addressPrecision,
            $maxAddressPrecision;

    //endregion

    public function __construct($obj = null) {
        if ($obj == null)
            return;

        $this->verificationStatus = ArrayUtil::setField($obj,'verification_status');
        $this->addressPrecision = ArrayUtil::setField($obj,'address_precision');
        $this->maxAddressPrecision = ArrayUtil::setField($obj,'max_address_precision');
    }

    public function getVerificationStatus() {
        return $this->verificationStatus;
    }

    public function getAddressPrecision() {
        return $this->addressPrecision;
    }

    public function getMaxAddressPrecision() {
        return $this->maxAddressPrecision;
    }
}