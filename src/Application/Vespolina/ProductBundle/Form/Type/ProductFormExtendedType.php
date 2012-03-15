<?php
/**
* (c) 2011 Vespolina Project http://www.vespolina-project.org
*
* This source file is subject to the MIT license that is bundled
* with this source code in the file LICENSE.
*/
namespace Application\Vespolina\ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Vespolina\ProductBundle\Form\Type\FeatureFormType;
use Vespolina\ProductBundle\Form\Type\ProductFormType;
/**
 * @author Richard Shank <develop@zestic.com>
 * @author Luis Cordova <cordoval@gmail.com>
 */
class ProductFormExtendedType extends ProductFormType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('name')
            ->add('description')
            ->add('image')
            ->add('price')
            ->add('file')
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Application\Vespolina\ProductBundle\Document\DownloadableProduct',
        );
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    function getName()
    {
        return 'vespolina_downloadable_product';
    }
}
