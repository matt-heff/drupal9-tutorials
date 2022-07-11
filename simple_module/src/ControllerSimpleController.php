<?php
namespace Drupal\simple_module\Controller;
class SimpleController {
  public function demopage() {
    return array(
      '#markup' => "Congratulations, you have made your a Custom Module in Drupal 9!</br>Time to Celebrate!</br>Don't forget to reward yourself!"
    );
  }
}

