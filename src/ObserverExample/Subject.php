<?php

namespace Webham\DesignPatterns\ObserverExample;

use Webham\DesignPatterns\ObserverExample\SubjectInterface;
use Webham\DesignPatterns\ObserverExample\ObserverInterface;

/**
 * The Subject owns some important state and notifies observers when the state
 * changes.
 */
class Subject implements SubjectInterface
{

    public $state;

    /**
     * @var \SplObjectStorage List of subscribers. In real life, the list of
     * subscribers can be stored more comprehensively (categorized by event
     * type, etc.).
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    /**
     * {@inheritdoc}
     */
    public function attach(ObserverInterface $observer): void
    {
        $this->observers->attach($observer);
        echo "Subject: Attached an observer.\n <br>";
    }

    /**
     * {@inheritdoc}
     */
    public function detach(ObserverInterface $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.\n <br>";
    }

    /**
     * {@inheritdoc}
     */
    public function notify(): void
    {
        echo "Subject: Notifying observers...\n <br>";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Doing some business logic.
     */
    public function someBusinessLogic(): void
    {
        $this->state = rand(0, 10);
        echo "Subject: My state has just changed to: " . $this->state ."\n <br>";
        $this->notify();
    }
}
