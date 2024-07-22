namespace App\Http\Controllers;

use App\Models\CourrierEntrant;
use Illuminate\Http\Request;

class CourrierEntrantController extends Controller
{
    public function index()
    {
        $courriers = CourrierEntrant::all();
        return response()->json($courriers);
    }

    public function store(Request $request)
    {
        $courrier = CourrierEntrant::create($request->all());
        return response()->json($courrier, 201);
    }

    public function update(Request $request, $id)
    {
        $courrier = CourrierEntrant::findOrFail($id);
        $courrier->update($request->all());
        return response()->json($courrier, 200);
    }

    public function destroy($id)
    {
        CourrierEntrant::destroy($id);
        return response()->json(null, 204);
    }
}
