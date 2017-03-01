<?php

namespace SmartyStreets\PhpSdk\International_Street;

require_once('Components.php');
require_once('Metadata.php');
require_once('Analysis.php');
require_once(dirname(dirname(__FILE__)) . '/ArrayUtil.php');
use SmartyStreets\PhpSdk\ArrayUtil;

class Candidate {

    //region [ Fields ]

    private $organization,
            $address1,
            $address2,
            $address3,
            $address4,
            $address5,
            $address6,
            $address7,
            $address8,
            $address9,
            $address10,
            $address11,
            $address12,
            $components,
            $metadata,
            $analysis;

    //endregion

    public function __construct($obj = null) {
        if ($obj == null)
            return;

        $this->organization = ArrayUtil::setField($obj,'organization');
        $this->address1 = ArrayUtil::setField($obj,'address1');
        $this->address2 = ArrayUtil::setField($obj,'address2');
        $this->address3 = ArrayUtil::setField($obj,'address3');
        $this->address4 = ArrayUtil::setField($obj,'address4');
        $this->address5 = ArrayUtil::setField($obj,'address5');
        $this->address6 = ArrayUtil::setField($obj,'address6');
        $this->address7 = ArrayUtil::setField($obj,'address7');
        $this->address8 = ArrayUtil::setField($obj,'address8');
        $this->address9 = ArrayUtil::setField($obj,'address9');
        $this->address10 = ArrayUtil::setField($obj,'address10');
        $this->address11 = ArrayUtil::setField($obj,'address11');
        $this->address12 = ArrayUtil::setField($obj,'address12');

        $this->components = new Components(ArrayUtil::setField($obj, 'components', array()));
        $this->metadata = new Metadata(ArrayUtil::setField($obj, 'metadata', array()));
        $this->analysis = new Analysis(ArrayUtil::setField($obj, 'analysis', array()));
    }

    //region [ Getters ]

    public function getOrganization() {
        return $this->organization;
    }

    public function getAddress1() {
        return $this->address1;
    }

    public function getAddress2() {
        return $this->address2;
    }

    public function getAddress3() {
        return $this->address3;
    }

    public function getAddress4() {
        return $this->address4;
    }

    public function getAddress5() {
        return $this->address5;
    }

    public function getAddress6() {
        return $this->address6;
    }

    public function getAddress7() {
        return $this->address7;
    }

    public function getAddress8() {
        return $this->address8;
    }

    public function getAddress9() {
        return $this->address9;
    }

    public function getAddress10() {
        return $this->address10;
    }

    public function getAddress11() {
        return $this->address11;
    }

    public function getAddress12() {
        return $this->address12;
    }

    public function getComponents() {
        return $this->components;
    }

    public function getMetadata() {
        return $this->metadata;
    }

    public function getAnalysis() {
        return $this->analysis;
    }

    //endregion
}