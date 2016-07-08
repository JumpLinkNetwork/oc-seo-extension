<?php

namespace JumpLink\SeoExtension\models;

use Model;

class Settings extends Model{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'jumplink_seoextension_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    protected $cache = [];


} 