<?php
/**
 * 
 *
 * @author avenda@gmail.com
 * @copyright
 */
class Resource implements iResource{
  $contained = [];
  $id = '';
  $language = '';
  $resourceMetadata = [];
  $resourceName = '';
  $text = '';
  public function __constrctor(){
    parent::__construct();
  }
  public function getContained(){
  }
  public function getId(){
  }
  public function getLanguage(){
  }
  public function getResourceMetadata(){
  }
  public function getResourceName(){
  }
  public function getText(){
  }
  public function setId($id){
  }
  public function setLanguage($language){
  }
  public function setResourceMetadata($resourceMetadata){
    //TODO: Validate!
  }

}
