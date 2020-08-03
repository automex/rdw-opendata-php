<?php 

use PHPUnit\Framework\TestCase;
use RDWOA\RDW;

class RDWTest extends TestCase
{
    public function testContainsMerkWithoutDataSpecified()
    {
        $data = RDW::get('XP004T');

        $this->assertObjectHasAttribute(
            'kenteken',
            $data
        );
    }

    public function testContainsMerkWithInfoDataSpecified()
    {
        $data = RDW::get('XP004T', 'info');

        $this->assertObjectHasAttribute(
            'kenteken',
            $data
        );
    }
    
    public function testContainsSpoorbreedte()
    {
        $data = RDW::get('XP004T', 'assen');

        $this->assertObjectHasAttribute(
            'spoorbreedte',
            $data
        );
    }

    public function testContainsBrandstofOmschrijving()
    {
        $data = RDW::get('XP004T', 'brandstof');

        $this->assertObjectHasAttribute(
            'brandstof_omschrijving',
            $data
        );
    }
    
    public function testContainsCarrosserieType()
    {
        $data = RDW::get('XP004T', 'carrosserie');

        $this->assertObjectHasAttribute(
            'carrosserietype',
            $data
        );
    }
	
	  public function testContainsCarrosserieVolgnummer()
    {
        $data = RDW::get('XP004T', 'carrosserieSpecifiek');

        $this->assertObjectHasAttribute(
            'carrosserie_volgnummer',
            $data
        );
    }
	
	  public function testContainsBijzonderheidVolgnummer()
    {
        $data = RDW::get('XP004T', 'voertuigBijzonderheden');

        $this->assertObjectHasAttribute(
            'bijzonderheid_volgnummer',
            $data
        );
    }
	
	  public function testContainsSubcategorieVolgnummer()
    {
        $data = RDW::get('XP004T', 'voertuigSubcategorie');

        $this->assertObjectHasAttribute(
            'subcategorie_voertuig',
            $data
        );
    }
}