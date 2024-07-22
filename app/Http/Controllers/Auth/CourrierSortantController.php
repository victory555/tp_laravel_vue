namespace App\Http\Controllers;

use App\Models\CourrierSortant;
use Illuminate\Http\Request;

class CourrierSortantController extends Controller
{
    public function index()
    {
        $courriers = CourrierSortant::all();
        return response()->json($courriers);
    }

    public function store(Request $request)
    {
        $courrier = CourrierSortant::create($request->all());
        return response()->json($courrier, 201);
    }

    public function update(Request $request, $id)
    {
        $courrier = CourrierSortant::findOrFail($id);
        $courrier->update($request->all());
        return response()->json($courrier, 200);
    }

    public function destroy($id)
    {
        CourrierSortant::destroy($id);
        return response()->json(null, 204);
    }
}
