<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.command.installer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Command\\CKEditorInstallerCommand.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Installer\\CKEditorInstaller.php';

$this->privates['fos_ck_editor.command.installer'] = $instance = new \FOS\CKEditorBundle\Command\CKEditorInstallerCommand(new \FOS\CKEditorBundle\Installer\CKEditorInstaller());

$instance->setName('ckeditor:install');

return $instance;
