<?php
/**
 * Resource interface for futher implements
 * @author avenda@gmail.com
 * @copyright
 */
interface iResource
{
    public function getContained();
    public function getId();
    public function getLanguage();
    public function getResourceMetadata();
    public function getResourceName();
    public function getText();
    public function setId($theId);
    public function setLanguage($theLanguage);
    public function setResourceMetadata($theMap);

}
