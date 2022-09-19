<?php

namespace Drupal\azuresimple\Plugin\rest\resource;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Url;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Drupal\node\Entity\Node;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\ResourceResponse;

/**
 * Provides Get Bids Table API for Content Based on URL.
 *
 * @RestResource(
 *   id = "user_profile",
 *   label = @Translation("User Profile"),
 *   uri_paths = {
 *     "canonical" = "/api/user_profile",
 *     "create" = "api/user_profile" 

 *   }
 * )
 */

class GetUser extends ResourceBase {

/**
   * Responds to entity Post requests.
   *
   * @return \Drupal\rest\ResourceResponse
   *   Returning rest resource.
   */


}
