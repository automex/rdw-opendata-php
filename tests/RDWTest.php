<?php 

use PHPUnit\Framework\TestCase;
use RDWOA\RDW;

class RDWTest extends TestCase
{
    public function testContainsMerkWithoutDataSpecified()
    {
        $data = RDW::get('90FPDP');

        $this->assertObjectHasAttribute(
            'kenteken',
            $data
        );
    }
    
    public function testContainsSpoorbreedteWithAssenDateSpecified()
    {
        $data = RDW::get('90FPDP', 'assen');

        $this->assertObjectHasAttribute(
            'spoorbreedte',
            $data
        );
    }

    public function testContainsMerkWithInfoDataSpecified()
    {
        $data = RDW::get('90FPDP', 'info');

        $this->assertObjectHasAttribute(
            'kenteken',
            $data
        );
    }

    public function testContainsBrandstofOmschrijving()
    {
        $data = RDW::get('90FPDP', 'brandstof');

        $this->assertObjectHasAttribute(
            'brandstof_omschrijving',
            $data
        );
    }
    
    public function testContainsCarrosserieType()
    {
        $data = RDW::get('90FPDP', 'carrosserie');

        $this->assertObjectHasAttribute(
            'carrosserietype',
            $data
        );
    }
}
