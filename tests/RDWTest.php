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
<<<<<<< Updated upstream
}
=======
	
    public function testContainsCarrosserieVolgnummer()
    {
        $data = RDW::get('OR51JV', 'carrosserieSpecifiek');

        $this->assertObjectHasAttribute(
            'carrosserie_volgnummer',
            $data
        );
    }
	
    public function testContainsBijzonderheidVolgnummer()
    {
        $data = RDW::get('0001WP', 'voertuigBijzonderheden');

        $this->assertObjectHasAttribute(
            'bijzonderheid_volgnummer',
            $data
        );
    }
	
    public function testContainsSubcategorieVolgnummer()
    {
        $data = RDW::get('0005WD', 'voertuigSubcategorie');

        $this->assertObjectHasAttribute(
            'subcategorie_voertuig',
            $data
        );
    }
	
	
}
>>>>>>> Stashed changes
