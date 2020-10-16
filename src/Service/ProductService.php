<?php


namespace App\Service;


use App\Entity\Product;
use App\Repository\ProductRepository;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function findAll()
    {
        return $this->productRepository->findAll();
    }

    public function save(Product $productEntity)
    {
        $this->productRepository->save($productEntity);
    }

    public function delete(Product $product)
    {
        $this->productRepository->delete($product);
    }
}
