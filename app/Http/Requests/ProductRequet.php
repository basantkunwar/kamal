<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequet extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       
               return [
            // Basic Information
            'name' => ['required', 'string', 'min:2', 'max:255'],

            'sku' => [
                'nullable',
                'string',
                'max:100',
            
            ],

            'description' => ['required', 'string', 'max:5000'],

            'category_id' => [
                'required',
                'integer',
                'exists:categories,id',
            ],

            'brand_id' => [
                'required',
                'integer',
                'exists:brands,id',
            ],
'types_of_audiance' => ['required', 'array', 'min:1'],
'types_of_audiance.*' => [
    'required',
    'integer',
    'distinct',
    'exists:types,id',
],
            'status' => [
                'required',
                Rule::in(['0', '1']),
            ],

            // Pricing Information
            'purchase_price' => [
                'nullable',
                'numeric',
                'min:0',
                'decimal:0,2',
            ],

            'price' => [
                'required',
                'numeric',
                'min:0',
                'decimal:0,2',
            ],

            'discount' => [
                'nullable',
                'numeric',
                'between:0,100',
                'decimal:0,2',
            ],

            // Inventory & Shipping
            'stock' => [
                'required',
                'integer',
                'min:0',
            ],

            'weight' => [
                'nullable',
                'numeric',
                'min:0',
                'decimal:0,2',
            ],

            // Product Image
              'image' => $this->isMethod('post')
            ? 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
            : 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the product name.',
            'name.min' => 'Product name must contain at least 2 characters.',
            'name.max' => 'Product name cannot exceed 255 characters.',

            'sku.required' => 'Please enter the product SKU.',
            'sku.unique' => 'This SKU already exists. Please use another SKU.',

            'category_id.required' => 'Please select a category.',
            'category_id.exists' => 'The selected category is invalid.',

            'brand_id.required' => 'Please select a brand.',
            'brand_id.exists' => 'The selected brand is invalid.',

            'type_id.required' => 'Please select a product type.',
            'type_id.in' => 'Please select a valid product type.',

            'status.required' => 'Please select the product status.',
            'status.in' => 'The selected product status is invalid.',

            'purchase_price.numeric' => 'Purchase price must be a valid number.',
            'purchase_price.min' => 'Purchase price cannot be negative.',

            'price.required' => 'Please enter the selling price.',
            'price.numeric' => 'Selling price must be a valid number.',
            'price.min' => 'Selling price cannot be negative.',

            'discount.numeric' => 'Discount must be a valid number.',
            'discount.between' => 'Discount must be between 0 and 100.',

            'stock.required' => 'Please enter the stock quantity.',
            'stock.integer' => 'Stock quantity must be a whole number.',
            'stock.min' => 'Stock quantity cannot be negative.',

            'weight.numeric' => 'Weight must be a valid number.',
            'weight.min' => 'Weight cannot be negative.',

            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'Image must be JPG, JPEG, PNG, or WEBP.',
            'image.max' => 'Image size cannot exceed 2 MB.',
        ];
    
    }
}
