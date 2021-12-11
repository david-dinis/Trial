<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class ProductDetails extends Component
{
    public function render()
    {
        return view('livewire.product-details', [
            'products' => Product::all()

        ]);
    }

    public function destroy($id)
    {
       Product::findOrFail($id)->delete();

       return redirect('/produtos');

    }
}
