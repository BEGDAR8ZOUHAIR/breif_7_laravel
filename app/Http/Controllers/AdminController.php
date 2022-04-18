
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    public function index()
    {
        $Admins = Admin::all();
        return view ('Admins.index')->with('Admins', $Admins);
    }
    
    public function create()
    {
        return view('Admins.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Admin::create($input);
        return redirect('Admin')->with('flash_message', 'Student Addedd!');  
    }
    
    public function show($id)
    {
        $Admin = Admin::find($id);
        return view('Admins.show')->with('Admins', $Admin);
    }
    
    public function edit($id)
    {
        $Admin = Admin::find($id);
        return view('Admins.edit')->with('Admins', $Admin);
    }
  
    public function update(Request $request, $id)
    {
        $student = Admin::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('Admin')->with('flash_message', 'Admin Updated!');  
    }
  
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect('Admin')->with('flash_message', 'Admin deleted!');  
    }
}