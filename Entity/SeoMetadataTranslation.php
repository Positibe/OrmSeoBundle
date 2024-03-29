<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Positibe\Bundle\OrmSeoBundle\Entity;

use Gedmo\Translatable\Entity\MappedSuperclass\AbstractTranslation;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class SeoMetadataTranslation
 * @package Positibe\Bundle\OrmSeoBundle\Entity
 *
 * @ORM\Table(name="positibe_seo_metadata_translations", indexes={
 *      @ORM\Index(name="positibe_seo_metadata_translation_idx", columns={"locale", "object_class", "field", "foreign_key"})
 * })
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
class SeoMetadataTranslation extends AbstractTranslation {

} 