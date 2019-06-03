<?php

namespace Webham\DesignPatterns\TemplateMethodExample;

/**
 * The Abstract Class defines a template method that contains a skeleton of some
 * algorithm, composed of calls to (usually) abstract primitive operations.
 *
 * Concrete subclasses should implement these operations, but leave the template
 * method itself intact.
 */
abstract class  PageTemplate
{
    /**
     * The template method defines the skeleton of an algorithm.
     */
    final public function templateMethod(): void
    {
        $footer_links = ['<a href="/impresum">Imprsum</a>', '<a href="/about">About</a>'];
        $footer_links = $this->hook_preprocess_footerlinks($footer_links);

        print '<header>' .  $this->renderHeader() . '</header>' .
        '<div class="' . $this->bodyClass() . '">' . $this->renderBody() . '</div>' .
        '<footer class="' . $this->footerClass() . '">' . $this->renderFooter() . '<div>' . implode(" | ", $footer_links)  . '</div></footer>';
    }

    /**
     * These operations already have implementations.
     */
    protected function renderFooter(): string
    {
        return "This is the footer.";
    }
    protected function bodyClass(): string
    {
        return "cool-body";
    }
    protected function footerClass(): string
    {
        return "cool-footer";
    }

    /**
     * These operations have to be implemented in subclasses.
     */
    abstract protected function renderHeader();

    abstract protected function renderBody();

    /**
     * These are "hooks." Subclasses may override them, but it's not mandatory
     * since the hooks already have default (but empty) implementation. Hooks
     * provide additional extension points in some crucial places of the
     * algorithm.
     */
    protected function hook_preprocess_footerlinks($footer_links) {
      return $footer_links;
    }

}
