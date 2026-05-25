<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Traemos todos los productos
     */
    public function index()
    {
        $products = Product::all($colums = ['id','name','price','stock']);
        $data = [
            'status' => 'success',
            'message' => 'Productos obtenidos exitosamente',
            'data' => $products
        ];
        return response()->json($data,200);
    }

    /**
     * Insertamos nuevos productos
     */
    public function store(Request $request)
    {

        $dataValidate = $request->validate([
            'name' => 'required | string | min:1',
            'price' => 'required | numeric',
            'stock' => 'required | integer'
        ]);

        $newProduct = Product::create($dataValidate);

        $data = [
            'status' => 'success',
            'message' => 'producto insertado exitosamente',
            'data' => $newProduct
        ];

        return response()->json($data,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $myProduct = Product::findOrFail($product);

        $data = [
            'status' => 'success',
            'message' => 'Producto obtenido exitosamente',
            'data' => $myProduct
        ];

        return response()->json($data,200);
    }

    /**
     * Actualizamos un registro específico
     */
    public function update(Request $request, Product $product)
    {
        $newData = $request->validate([
            "name" => "sometimes | string",
            "price" => "sometimes | numeric",
            "stock" => "sometimes | integer"
        ]);

        $product->update($newData);

        $data = [
            "status" => "success",
            "message" => "Producto actualizado correctamente",
            "data" => $product
        ];

        return response()->json($data,200);
    }

    /**
     * Eliminar producto
     */
    public function destroy(Product $product)
    {
        $productId = $product->id;
        $productName = $product->name;
        $product->delete();
        $data = [
            "status" => "success",
            "message" => "El producto ha sido eliminado correctamente",
            "id" => $productId,
            "name" => $productName
        ];
        return response()->json($data);
    }
}
