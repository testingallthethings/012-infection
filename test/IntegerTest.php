<?php
namespace Braddle;

use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{
    public function testFiveGreaterThanFour()
    {
        $four = new Integer(4);
        $five = new Integer(5);

        $this->assertTrue($five->greaterThan($four));
    }

    public function testFourNotGreaterThanFive()
    {
        $four = new Integer(4);
        $five = new Integer(5);

        $this->assertFalse($four->greaterThan($five));
    }

//    public function testFourNotGreaterThanFour()
//    {
//        $four = new Integer(4);
//
//        $this->assertFalse($four->greaterThan($four));
//    }

    $totalDefeated = $kill + $timeout + $error;
    $msi = ($totalDefeated / $totalMutation) * 100;

    $totalCoveredByTestMutation = $totalMutantsCount - $notCoverByTests;
    $mcc = ($totalCoveredByTestMutation / $totalMutation) * 100;

    $ccmsi = ($totalDefeated / $totalCoveredByTestMutation) * 100


}
