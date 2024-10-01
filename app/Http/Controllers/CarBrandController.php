<?php
namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function show($brand)
    {
        // Fetches the car brand by name
        $carBrand = Cars::where('brand', $brand)->firstOrFail();

        // Fetches all models for this brand
        $models = Cars::where('brand', $brand)->get();

        // Passes the brand and models data to the view
        return view('carbrands.show', [
            'brand' => $carBrand,
            'models' => $models,
        ]);
    }

    public function create($brand)
    {
        // Send you to create.blade.php for the given brand
        return view('carbrands.create', ['brand' => $brand]);
    }

    public function store(Request $request, $brand)
    {
        $currentYear = date('Y');

        // Validate filled data
        $validatedData = $request->validate([
            'model' => 'required|string|max:255',
            'year_of_manufacture' => "required|integer|digits:4|min:1900|max:$currentYear",
            'odometer' => 'required|integer|max:1000000',
            'fuel_type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Add the brand to the validated data
        $validatedData['brand'] = $brand;

        // Create a new car in the database
        Cars::create($validatedData);

        // Redirect back to show.blade.php
        return redirect()->route('carbrands.show', ['brand' => $brand]);
    }

    public function destroy($brand, $modelId)
    {
        // Finds the model by ID
        $model = Cars::where('brand', $brand)->where('id', $modelId)->firstOrFail();

        // Deletes the model
        $model->delete();

        // Redirect back to the models
        return redirect()->route('carbrands.show', ['brand' => $brand]);
    }
    public function edit($brand, $modelId)
    {
        // Fetch the model to be edited
        $model = Cars::where('brand', $brand)->where('id', $modelId)->firstOrFail();

        // Return the edit view with the model data
        return view('carbrands.edit', [
            'brand' => $brand,
            'model' => $model,
        ]);
    }

    public function update(Request $request, $brand, $modelId)
    {
        $currentYear = date('Y');

        // Validate the incoming request
        $validatedData = $request->validate([
            'model' => 'required|string|max:255',
            'year_of_manufacture' => "required|integer|digits:4|min:1900|max:$currentYear",
            'odometer' => 'required|integer|max:1000000',
            'fuel_type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Find the model by ID
        $model = Cars::where('brand', $brand)->where('id', $modelId)->firstOrFail();

        // Update the model
        $model->update($validatedData);

        // Redirect back to the models page
        return redirect()->route('carbrands.show', ['brand' => $brand]);
    }
}
