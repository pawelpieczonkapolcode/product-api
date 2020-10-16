<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductForm;
use App\Service\ProductService;
use App\Traits\Controller;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends AbstractFOSRestController
{
    use Controller;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var ProductService
     */
    private $productService;

    /**
     * ProductController constructor.
     * @param RequestStack $requestStack
     * @param ProductService $productService
     */

    public function __construct(RequestStack $requestStack, ProductService $productService)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->productService = $productService;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/product")
     * @return View
     */
    public function getProducts()
    {
        return View::create(
            $this->productService->findAll(),
            Response::HTTP_OK
        );
    }

    /**
     * @Rest\View()
     * @Rest\Get("/product/{productId}")
     * @ParamConverter("product", options={"mapping": {"productId" : "id"}})
     * @param Product $product
     * @return View
     */
    public function getProduct(Product $product)
    {
        return View::create(
            $product,
            Response::HTTP_OK
        );
    }

    /**
     * @Rest\View()
     * @Rest\Delete("/product/{productId}")
     * @ParamConverter("product", options={"mapping": {"productId" : "id"}})
     * @param Product $product
     * @return View
     */
    public function deleteProduct(Product $product)
    {
        $this->productService->delete($product);
        return View::create([], Response::HTTP_NO_CONTENT);
    }

    /**
     * @Rest\View()
     * @Rest\Post("/product")
     * @return View
     */
    public function createProduct()
    {
        $productForm = $this->createForm(ProductForm::class, new Product());
        $data = json_decode($this->request->getContent(), true);
        $productForm->submit($data);

        if ($productForm->isValid()) {
            /** @var Product $productEntity */
            $productEntity = $productForm->getData();
            $this->productService->save($productEntity);

            return View::create(
                $productEntity,
                Response::HTTP_CREATED
            );
        }

        return View::create(
            $this->getErrorMessages($productForm),
            Response::HTTP_BAD_REQUEST
        );
    }

    /**
     * @Rest\View()
     * @Rest\Put("/product/{productId}")
     * @ParamConverter("product", options={"mapping": {"productId" : "id"}})
     * @param Product $product
     * @return View
     */
    public function updateProduct(Product $product)
    {
        $productForm = $this->createForm(ProductForm::class, $product);
        $data = json_decode($this->request->getContent(), true);
        $productForm->submit($data);

        if ($productForm->isValid()) {
            /** @var Product $productEntity */
            $productEntity = $productForm->getData();
            $this->productService->save($productEntity);

            return View::create(
                $productEntity,
                Response::HTTP_OK
            );
        }

        return View::create(
            $this->getErrorMessages($productForm),
            Response::HTTP_BAD_REQUEST
        );
    }
}
