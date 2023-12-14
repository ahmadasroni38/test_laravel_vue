<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
            return response()->json(
                [
                    'products' => $products,
                    'status' => 'success'
                ]
            );
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function create_action(Request $request)
    {
        try {
            // Validate the request data here if needed
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }

            $product = Product::create([
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'harga' => $request->input('harga'),
            ]);

            return response()->json(
                [
                    'message' => 'Product created successfully', 
                    'product' => $product,
                    'status' => 'success'
                ], 
            201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database Error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function detail($id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return response()->json(['message' => 'Product not found'], 404);
            }

            return response()->json(
                [
                    'product' => $product,
                    'status' => 'success'
                ]
            );
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function update_action(Request $request, $id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return response()->json(['message' => 'Product not found'], 404);
            }

            // Validate the request data here if needed

            $product->update([
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'harga' => $request->input('harga'),
            ]);

            return response()->json(
                [
                    'message' => 'Product updated successfully', 
                    'product' => $product,
                    'status' => 'success'
                ]
            );
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database Error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function delete_action($id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return response()->json(['message' => 'Product not found'], 404);
            }

            $product->delete();

            return response()->json(
                [
                    'message' => 'Product deleted successfully',
                    'status' => 'success'
                ]
            );
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database Error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
