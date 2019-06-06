<?php

namespace Webham\DesignPatterns\CompositeExample;

use Webham\DesignPatterns\CompositeExample\TreeComponent;

/**
 * The BranchComposite class represents the complex components that may have children.
 * Usually, the BranchComposite objects delegate the actual work to their children and
 * then "sum-up" the result.
 */
class BranchComposite extends TreeComponent
{
    /**
     * @var \SplObjectStorage
     */
    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    /**
     * A BranchComposite object can add or remove other components (both simple or
     * complex) to or from its child list.
     */
    public function add(TreeComponent $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(TreeComponent $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isBranchComposite(): bool
    {
        return true;
    }

    /**
     * The BranchComposite executes its primary logic in a particular way. It
     * traverses recursively through all its children, collecting and summing
     * their results. Since the BranchComposite's children pass these calls to their
     * children and so forth, the whole object tree is traversed as a result.
     */
    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }
        return "Branch(" . implode("+", $results) . ")";
    }
}
