<?php

namespace Webham\DesignPatterns\CompositeExample;

use Webham\DesignPatterns\CompositeExample\TreeComponent;

/**
 * The Leaf class represents the end objects of a composition. A leaf can't have
 * any children.
 *
 * Usually, it's the Leaf objects that do the actual work, whereas BranchComposite
 * objects only delegate to their sub-components.
 */
class Leaf extends TreeComponent
{
    public function operation(): string
    {
        return "Leaf";
    }
}
