<?php
/**
 * Binstellar Technologies Pvt. Ltd.
 *
 *
 * @package     Binstellar_Freehomemeasure
 * @copyright   Copyright (c) Binstellar (https://www.binstellar.com/)
 */
namespace Binstellar\Freehomemeasure\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Bookfreemeasure implements ResolverInterface
{
    private $bookfreemeasureDataProvider;
    /**
     * @param DataProvider\Bookfreemeasure $bookfreemeasureRepository
     */
    public function __construct(
        \Binstellar\Freehomemeasure\Model\Resolver\DataProvider\Bookfreemeasure $bookfreemeasureDataProvider
    ) {
        $this->bookfreemeasureDataProvider = $bookfreemeasureDataProvider;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $bookfreemeasureDetails = $this->bookfreemeasureDataProvider->getBookfreemeasureDetails();
        return $bookfreemeasureDetails;
    }
}