<?php
/**
 * Binstellar Technologies Pvt. Ltd.
 *
 *
 * @package     Binstellar_Freehomemeasure
 * @copyright   Copyright (c) Binstellar (https://www.binstellar.com/)
 */
namespace Binstellar\Freehomemeasure\Model\Resolver\DataProvider;

class Bookfreemeasure
{
    protected $bookfreehomemeasureFactory;

    public function __construct(
        \Binstellar\Freehomemeasure\Model\BookfreehomemeasureFactory $bookfreehomemeasureFactory
        )
    {
        $this->bookfreehomemeasureFactory  = $bookfreehomemeasureFactory;
    }
    /**
     * @params int $id
     * this function return all the word of the day by id
     **/
    public function getBookfreemeasureDetails()
    {
        try {
            $collection = $this->bookfreehomemeasureFactory->create()->getCollection();
            $bookfreehomemeasureData = $collection->getData();

            $bookFreeMeasureDetails = [];
            foreach ($bookfreehomemeasureData as $value) {
                $bookFreeMeasureDetails[] = ['firstname' => $value['firstname'],
                                            'lastname' => $value['lastname'],
                                            'email' => $value['email']
                                            ]; 
            }

        } catch (NoSuchEntityException $e) {
            throw new GraphQlNoSuchEntityException(__($e->getMessage()), $e);
        }
        return $bookFreeMeasureDetails;
    }
}