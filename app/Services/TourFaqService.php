<?php

namespace App\Services;

use App\Repositories\FaqRepository;
use App\Repositories\TourFaqRepository;

class TourFaqService
{
    protected $tourFaqRepository;

    public function __construct(TourFaqRepository $tourFaqRepository)
    {
        $this->tourFaqRepository = $tourFaqRepository;
    }

    public function listFaq()
    {
        return $this->tourFaqRepository->getAll();
    }

    public function createOrUpdateFaq($data)
    {
        try {

            $validatedData = [
                'question' => $data['question'],
                'answer' => $data['answer'],
                'tour_id' => $data['tour_id'],
            ];

            if (isset($data['id']) && $data['id']) {
                $faq = $this->tourFaqRepository->find($data['id']);
                $faq = $this->tourFaqRepository->update($faq, $validatedData);

                return [
                    'message' => 'FAQ updated successfully!',
                    'faq' => $faq,
                    'status' => 200,
                ];
            } else {
                $faq = $this->tourFaqRepository->create($validatedData);

                return [
                    'message' => 'FAQ created successfully!',
                    'faq' => $faq,
                    'status' => 201,
                ];
            }
        } catch (\Exception $e) {
            return [
                'message' => 'Error processing FAQ',
                'error' => $e->getMessage(),
                'status' => 500,
            ];
        }
    }

    public function deleteFaq($id)
    {
        try {
            $faq = $this->tourFaqRepository->find($id);

            if ($faq) {
                $faq->delete();
                return [
                    'message' => 'FAQ deleted successfully!',
                ];
            }

            return [
                'message' => 'FAQ not found!',
            ];
        } catch (\Exception $e) {
            return [
                'message' => 'Error deleting FAQ',
                'error' => $e->getMessage(),
            ];
        }
    }
}
