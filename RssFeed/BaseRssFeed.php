<?php

abstract class BaseRssFeed {
	
	const DEFAULT_RSS_VERSION = '2.0';

	protected $version;
	
	public function __construct($version = self::DEFAULT_RSS_VERSION) {
		$this->setVersion($version);
	}
	
	public function setVersion($version) {
		$this->version = $version;
	}
}