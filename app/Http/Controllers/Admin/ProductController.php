<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Repositories\AttributeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SubCategoryRepository;

class ProductController extends Controller
{

    protected $productRepository;
    protected $subCategoryRepository;
    protected $categoryRepository;
    protected $attributeRepository;


    public function __construct(ProductRepository $productRepository, SubCategoryRepository $subCategoryRepository, CategoryRepository $categoryRepository, AttributeRepository $attributeRepository){
       $this->productRepository = $productRepository;
       $this->subCategoryRepository = $subCategoryRepository;
       $this->categoryRepository = $categoryRepository;
       $this->attributeRepository = $attributeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryRepository->get();
        $subcategories = $this->subCategoryRepository->get();

        $attributes = $this->attributeRepository->get();

        return view('admin.products.create', compact('categories', 'subcategories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = $this->productRepository->findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
