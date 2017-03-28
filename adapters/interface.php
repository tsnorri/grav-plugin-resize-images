<?php
namespace Grav\Plugin;

interface ResizeAdapterInterface
{
    public function __construct($source);

    public function resize($width, $height);

    public function getFormat();

    public function setQuality($quality);

	public function setShouldCrop($should_crop);

    public function save($filename);
}
