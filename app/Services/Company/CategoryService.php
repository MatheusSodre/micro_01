<?php

namespace App\Services\Company;
use App\Repositories\Company\CategoryRepository;

class CategoryService
{


    /**
     * Create a new service instance.
     *
     * @param  CategoryRepository  $categoryRepository
     * @return void
     */
    public function __construct(private CategoryRepository $categoryRepository)
    {
        //
    }

    public function store(array $data)
    {
        return $this->categoryRepository->create($data);
    }


    public function getAll()
    {
        return $this->categoryRepository->all($relations = [], $columns = ['*']);
    }

    public function getById($id)
    {
        return $this->categoryRepository->findOrFail($id);
    }

    public function update($request,$id):bool|null
    {
        return $this->categoryRepository->update($request,$id);
    }

    public function destroy($id):bool|null
    {
        return $this->categoryRepository->delete($id);
    }
}
