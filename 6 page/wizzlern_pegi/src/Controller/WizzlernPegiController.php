<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Controller\WizzlernPegiController.
 */

namespace Drupal\wizzlern_pegi\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityManagerInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for Wizzlern Pegi module routes.
 */
class WizzlernPegiController extends ControllerBase {

  /**
   * The entity manager
   *
   * @var EntityManagerInterface
   */
  protected $entityManager;

  /**
   * The entity query manager
   *
   * @var QueryFactory
   */
  protected $entityQuery;

  /**
   * Constructs a content controller.
   *
   * @param EntityManagerInterface $entity_manager
   * @param QueryFactory $entity_query
   */
  public function __construct(EntityManagerInterface $entity_manager, QueryFactory $entity_query) {

    $this->entityManager = $entity_manager;
    $this->entityQuery = $entity_query;
  }

  /**
   * {@inheritdoc}
   *
   * This class requires entity.manager and entity.query services, but they are
   * not available in the the controller base class. The create() method is used
   * to instantiate the controller with the required services. Pointers to the
   * services are passed on to the class constructor where they are stored in
   * the class for further use.
   */
  public static function create(ContainerInterface $container) {

    return new static(
      $container->get('entity.manager'),
      $container->get('entity.query')
    );
  }

  /**
   * Content controller callback: All games.
   *
   * @return array
   *   Render array of page output.
   */
  public function allGames() {

    // EXERCISES:
    // - Use a query to load all games, just like you did in the new games block.
    // - Build a teaser view of each node.
    // - Build an HTML list of node views.
    // - (optional) Add a pager. Tip: It only takes one line of code in the
    //   entity query and one line of code in the build array.

    // Load all published games.
    $nodes = array();

    // Build a list of node teasers.
    $items = array();

    // Build the output as a render array.
    $build['games'] = array();
    $build['pager'] = array();

    return $build;
  }

}
