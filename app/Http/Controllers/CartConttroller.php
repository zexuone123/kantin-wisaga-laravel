<!-- 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product_id = $request->input('product_id');
        $product = Product::find($product_id);
        
            return redirect()->back()->with('success', 'Product added to cart!');
        
      
    }
    
} -->