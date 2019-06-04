<?php

namespace Webham\DesignPatterns\CompositeExample;

use Webham\DesignPatterns\CompositeExample\TreeComponent;

/**
 * The base Component class declares common operations for both simple and
 * complex objects of a composition.
 */
abstract class TreeComponent
{
    /**
     * @var TreeComponent
     */
    protected $parent;

    /**
     * Optionally, the base TreeComponent can declare an interface for setting and
     * accessing a parent of the TreeComponent in a tree structure. It can also
     * provide some default implementation for these methods.
     */
    public function setParent(TreeComponent $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): TreeComponent
    {
        return $this->parent;
    }

    /**
     * In some cases, it would be beneficial to define the child-management
     * operations right in the base TreeComponent class. This way, you won't need to
     * expose any concrete TreeComponent classes to the client code, even during the
     * object tree assembly. The downside is that these methods will be empty
     * for the leaf-level components.
     */
    public function add(TreeComponent $component): void { }

    public function remove(TreeComponent $component): void { }

    /**
     * You can provide a method that lets the client code figure out whether a
     * component can bear children.
     */
    public function isBranchComposite(): bool
    {
        return false;
    }

    /**
     * The base Component may implement some default behavior or leave it to
     * concrete classes (by declaring the method containing the behavior as
     * "abstract").
     */
    abstract public function operation(): string;
}
