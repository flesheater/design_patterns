<?php

namespace Webham\DesignPatterns\TemplateMethodExample;

use Webham\DesignPatterns\TemplateMethodExample\PageTemplate;

class PageOne extends PageTemplate
{
    protected function renderHeader()
    {
        return "Header content.";
    }

    protected function renderBody()
    {
        return "Body content.";
    }

    protected function hook_preprocess_footerlinks($footer_links) {
      $footer_links[] = '<a href="/google">Go to google link</a>';
      return $footer_links;
    }
}
