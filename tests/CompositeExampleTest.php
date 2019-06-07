<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\CompositeExample\Leaf;
use Webham\DesignPatterns\CompositeExample\BranchComposite;

class CompositeExampleTest extends TestCase
{
    public function testSimpleComposite()
    {
        $simple = new Leaf;
        print "Client: I've got a simple component:<br>";
        print "operation on: " . $simple->operation();
        
        $this->assertContains(
            'operation on: Leaf',
            $this->getActualOutput()
        );
    }

    public function testComplexComposite()
    {
        /**
         * ...as well as the complex BranchComposites.
         */
        $tree = new BranchComposite;
        $branch1 = new BranchComposite;
        $branch1->add(new Leaf);
        $branch1->add(new Leaf);
        $branch2 = new BranchComposite;
        $branch2->add(new Leaf);
        $tree->add($branch1);
        $tree->add($branch2);
        print "<br>Client: Now I've got a BranchComposite tree:<br>";
        print "operation on: " . $tree->operation();

        $this->assertContains(
            'operation on: Branch(Branch(Leaf+Leaf)+Branch(Leaf))',
            $this->getActualOutput()
        );
    }
}
