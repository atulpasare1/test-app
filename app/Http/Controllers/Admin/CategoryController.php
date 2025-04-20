<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    // Show all categories
      //
      private $title = 'Caegory';
      private $subtitle = 'You can manage Category From here';
        public function __construct(Type $var = null) {
            $this->var = $var;
        }
    public function index(Request $request)
    {
        if($request->ajax()) {
           return $categories = $this->getCategoriesData($request);

        }

        return view('admin.category.index',
    [], [
            'title' => $this->title,
            'section' => '',
            'subtitle' => $this->subtitle,
        ]);
    }

    // Show the form for creating a new category
    public function create(Request $request)

    {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'short_description' => 'nullable|string',
                'description' => 'nullable|string',
                'status' => 'required|boolean',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->first(),
                ]);
            }
            if($request->category_id !== null)

            {
                $category = Category::find($request->category_id);
                if ($category) {
                    $category->update([
                        'name' => $request->name,
                        'code' => Str::random(10),
                        'slug' => Str::slug($request->name).Str::random(10),
                        'short_description' => $request->description,
                        'description' => $request->description,
                        'is_active' => $request->status,
                    ]);
                    return response()->json([
                        'status' => true,
                        'message' => 'Category updated successfully!',
                    ]);
                }
            }
            $category = [
                'name' => $request->name,
                'code' => Str::random(10),
                'slug' => Str::slug($request->name),
                'short_description' => $request->description,
                'description' => $request->description,
                'is_active' => $request->status,
            ];
          Category::create($category);
            return response()->json([
                'status' => true,
                'message' => 'Category created successfully!',
            ]);
    }

    // Store a newly created category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:categories,code',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);
        $category= [
            'name' => $request->name,
            'code' => $request->code,
            'slug' => Str::slug($request->name),
            'short_description' => $request->description,
            'description' => $request->description,
            'is_active' => $request->is_active,
        ];

        Category::create(category);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully!',
        ]);
    }

    // Show the form for editing the specified category
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Update the specified category
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:categories,code,' . $category->id,
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete the specified category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }

    public function getCategoriesData($request)
    {
        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $search = $request->input('search.value');

        // Total records without filtering
        $totalRecords = DB::table('categories')->count();

        // Base query
        $query = DB::table('categories');

        // Apply filters if search is provided
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('short_description', 'like', '%' . $search . '%');
            });
        }

        // Count after filtering (before pagination)
        $filteredRecords = $query->count();

        // Apply pagination
        $data = $query->offset($start)
                      ->limit($length)
                      ->get();

        // Prepare response
        $response = [
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $data->map(function ($item) {
                return [
                    'name' => $item->name,
                    'status' => $item->is_active ? 'Active' : 'Inactive',
                    'actions' => "<button class='btn btn-primary editcategory'
                                    onclick='editCategory(" . $item->id . ", \"" . $item->name . "\", \"" . $item->code . "\", \"" . $item->slug . "\", \"" . $item->short_description . "\", \"" . $item->description . "\", " . $item->is_active . ")'>
                                    Edit
                                  </button>
                                  <button class='btn btn-danger delete-category' data-id='" . $item->id . "'>Delete</button>",
                ];
            }),
        ];

        return response()->json($response);
    }

}
